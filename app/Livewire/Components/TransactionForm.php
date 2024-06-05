<?php

namespace App\Livewire\Components;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TransactionForm extends Component
{
    public $type;
    public $amount;
    public $postLimitIncrement;
    public $snapToken;

    public function amout($type, $amount, $postLimitIncrement)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->postLimitIncrement = $postLimitIncrement;
    }

    public function submitForm()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        DB::transaction(function () {
            $user = User::findOrFail('id', Auth::user()->id);

            $user->post_limit = $user->post_limit > 0 ? $user->post_limit + $this->postLimitIncrement : $this->postLimitIncrement;
            $user->save();

            $customer = Customer::create([
                'user_id' => $user->id,
                'type' => $this->type,
                'amount' => $this->amount,
                'customer_code' => 'SANBOX-' . uniqid(),
            ]);

            $payload = [
                'transaction_details' => [
                    'order_id' => $customer->customer_code,
                    'gross_amount' => $customer->amount,
                ],
                'customer_details' => [
                    'first_name' => $user->name,
                    'email' => $user->email,
                ],
                'item_details' => [
                    [
                        'id' => $customer->type,
                        'price' => $customer->amount,
                        'quantity' => 1,
                        'name' => $customer->type,
                    ]
                ],
            ];

            $this->snapToken = \Midtrans\Snap::getSnapToken($payload);
            $customer->snap_token = $this->snapToken;
            $customer->save();
        });

        $this->dispatch('transactionCompleted', $this->snapToken);
    }

    public function render()
    {
        return view('livewire.components.transaction-form');
    }
}
