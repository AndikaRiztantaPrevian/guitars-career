<?php

namespace App\Livewire\User\JobVacancy;

use App\Models\Career;
use Livewire\Component;

class LowonganSaya extends Component
{
    public function render()
    {
        $careers = Career::query()
            ->where('user_id', auth()->id())
            ->with('village', 'district', 'city', 'province', 'skills')
            ->latest()
            ->orderBy('status')
            ->paginate(10);

        return view('livewire.user.job-vacancy.lowongan-saya', [
            'careers' => $careers
        ]);
    }
}
