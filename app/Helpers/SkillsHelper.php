<?php

namespace App\Helpers;

use App\Models\Skill;

class SkillsHelper
{

    public static function list()
    {
        return Skill::query()
            ->get();
    }
}
