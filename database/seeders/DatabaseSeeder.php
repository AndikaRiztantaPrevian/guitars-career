<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use KodePandai\Indonesia\IndonesiaDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
            CategoryCompanySeeder::class,
            SkillSeeder::class,
            GendreSeeder::class,
            IndonesiaDatabaseSeeder::class,
        ]);
    }
}
