<?php

namespace App\Livewire\User\Jobs;

use App\Models\Career;
use KodePandai\Indonesia\Models\City;
use Livewire\Component;

class JobsSection extends Component
{
    public $search = '';
    public $location = '';
    public $category = '';

    public function render()
    {
        $careers_query = Career::query()
            ->whereStatus('active')
            ->latest();

        $career_count = $careers_query
            ->count();

        $careers = $careers_query
            ->where('job_name', 'like', '%' . $this->search . '%')
            ->paginate(20);

        $cities = City::query()
            ->get();

        return view('livewire.user.jobs.jobs-section', [
            'careers' => $careers,
            'career_count' => $career_count,
            'cities' => $cities,
        ]);
    }
}
