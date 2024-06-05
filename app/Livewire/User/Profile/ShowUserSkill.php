<?php

namespace App\Livewire\User\Profile;

use App\Models\UserSkill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowUserSkill extends Component
{
    protected $listeners = ['skillsUpdated' => 'render'];

    public function render()
    {
        $userSkills = UserSkill::with('skill')->where('user_id', Auth::id())->get();

        return view('livewire.user.profile.show-user-skill', ['userSkills' => $userSkills]);
    }

    public function deleteSkill($userSkillId)
    {
        $userSkill = UserSkill::where('id', $userSkillId)->where('user_id', Auth::id())->first();

        if ($userSkill) {
            $userSkill->delete();
            $this->dispatch('skillsUpdated');
        }
    }
}
