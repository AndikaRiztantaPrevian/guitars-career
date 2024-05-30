<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gendres')->insert([
            'name' => 'Pop',
        ]);
        DB::table('gendres')->insert([
            'name' => 'Jazz',
        ]);
        DB::table('gendres')->insert([
            'name' => 'Classical',
        ]);
        DB::table('gendres')->insert([
            'name' => 'Blues',
        ]);
        DB::table('gendres')->insert([
            'name' => 'Blues',
        ]);
    }
}
