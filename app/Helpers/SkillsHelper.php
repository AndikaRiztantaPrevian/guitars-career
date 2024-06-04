<?php

namespace App\Helpers;

use App\Models\Skill;

class SkillsHelper
{

    /**
     * Helper untuk mendapatkan semua data dari model Skill
     *
     * @return void
     */
    public static function list()
    {
        return Skill::query()
            ->get();
    }
}
