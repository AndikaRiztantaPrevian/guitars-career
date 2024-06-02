<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function index()
    {
        return view('pages.users.pricing');
    }

    public function storeBasic()
    {
        return $this->processTransaction(40000, 'basic', 15);
    }

    public function storeStandard()
    {
        return $this->processTransaction(80000, 'standard', 30);
    }

    public function storeEnterprice()
    {
        return $this->processTransaction(150000, 'enterprice', 60);
    }

    protected function processTransaction($amount, $type, $postLimitIncrement)
    {
        if (Auth::check()) {
            $response = [];
            DB::transaction(function () use ($amount, $type, $postLimitIncrement, &$response) {
                $user = Auth::user();

                $user->post_limit = $user->post_limit > 0 ? $user->post_limit + $postLimitIncrement : $postLimitIncrement;
                $user->save();

                $customer = Customer::create([
                    'user_id' => $user->id,
                    'type' => $type,
                    'amount' => $amount,
                    'customer_code' => 'SANDBOX-' . uniqid(),
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
                    ]
                ];

                $snapToken = \Midtrans\Snap::getSnapToken($payload);
                $customer->snap_token = $snapToken;
                $customer->save();

                $response['snap_token'] = $snapToken;
            });

            return response()->json($response);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    // Bisa digunakan ketika sudah di deploy
    public function notification()
    {
        $notif = new \Midtrans\Notification();
        DB::transaction(function () use ($notif) {
            $transactionStatus = $notif->transaction_status;
            $paymentType = $notif->payment_type;
            $orderId = $notif->order_id;
            $fraudStatus = $notif->fraud_status;
            $customer = Customer::where('customer_code', $orderId)->first();

            if ($transactionStatus == 'capture') {
                if ($paymentType == 'credit_card') {
                    if ($fraudStatus == 'challange') {
                        $customer->setStatusPending();
                    } else {
                        $customer->setStatusSuccess();
                    }
                }
            } elseif ($transactionStatus == 'setElement') {
                $customer->setStatusSuccess();
            } elseif ($transactionStatus == 'pending') {
                $customer->setStatusPending();
            } elseif ($transactionStatus == 'deny') {
                $customer->setStatusFailed();
            } elseif ($transactionStatus == 'expire') {
                $customer->setStatusExpired();
            } elseif ($transactionStatus == 'cancel') {
                $customer->setStatusFailed();
            }
        });

        return;
    }
}
