<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            'name' => 'Gitar',
        ]);
        DB::table('skills')->insert([
            'name' => 'Piano',
        ]);
        DB::table('skills')->insert([
            'name' => 'Drum',
        ]);
        DB::table('skills')->insert([
            'name' => 'Penyanyi',
        ]);
    }
}
