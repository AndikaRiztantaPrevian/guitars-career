<?php

namespace App\Livewire\User\Profile;

use App\Models\Skill;
use App\Models\UserSkill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SkillUpdate extends Component
{
    public $selectedSkills = [];

    protected $rules = [
        'selectedSkills' => 'required|array|min:1',
    ];

    protected $messages = [
        'selectedSkills.required' => 'Keterampilan harus diisi',
        'selectedSkills.array' => 'Keterampilan harus berupa array',
        'selectedSkills.min' => 'Pilih setidaknya satu keterampilan',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        foreach ($this->selectedSkills as $skillId) {
            UserSkill::create([
                'user_id' => Auth::user()->id,
                'skill_id' => $skillId,
            ]);
        }

        $this->reset(['selectedSkills']);

        session()->flash('message', 'Keterampilan berhasil diperbarui.');

        $this->dispatch('skillsUpdated');
    }

    public function render()
    {
        return view('livewire.user.profile.skill-update', [
            'skills' => Skill::all()
        ]);
    }
}
