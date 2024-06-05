<?php

namespace App\Livewire\User\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $data = Customer::where('user_id', Auth::user()->id)->paginate(10);

        return view('livewire.user.customer.index', ['dataHistory' => $data]);
    }   
}
