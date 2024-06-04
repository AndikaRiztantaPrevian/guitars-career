<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_companies')->insert([
            ['name' => 'Industry'],
            ['name' => 'Software'],
            ['name' => 'Finance'],
            ['name' => 'Recruting'],
            ['name' => 'Management'],
            ['name' => 'Advertising'],
            ['name' => 'Development'],
        ]);
    }
}
