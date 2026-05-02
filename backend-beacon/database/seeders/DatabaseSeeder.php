<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            ArticleSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
