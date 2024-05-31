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
            ['name' => 'Pop'],
            ['name' => 'Jazz'],
            ['name' => 'Blues'],
            ['name' => 'Classic'],
            ['name' => 'Country']
        ]);
    }
}
