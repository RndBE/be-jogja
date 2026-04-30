<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Beacon',
            'email' => 'admin@beaconengineering.co.id',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            SolutionSeeder::class,
            SubSolutionSeeder::class,
            SubSolutionFeatureSeeder::class,
            ClientAndCategorySeeder::class,
            ProductSeeder::class,
            ProductComponentSeeder::class,
            ProjectSeeder::class,
            ProjectSeeder2::class,
            PageSettingSeeder::class,
        ]);
    }
}
