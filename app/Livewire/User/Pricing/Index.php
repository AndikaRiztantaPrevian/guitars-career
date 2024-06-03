<?php

namespace App\Livewire\User\Pricing;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Midtrans;

class Index extends Component
{
    public function render()
    {
        return view('livewire.user.pricing.index');
    }
}
