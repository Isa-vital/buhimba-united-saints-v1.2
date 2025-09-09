<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@buhimbasaints.com',
            'password' => bcrypt('password'),
        ]);

        // Create media officer user
        User::factory()->create([
            'name' => 'Media Officer',
            'email' => 'media@buhimbasaints.com',
            'password' => bcrypt('password'),
        ]);

        // Run other seeders
        $this->call([
            RoleSeeder::class,
            PlayerSeeder::class,
            StaffSeeder::class,
            SponsorSeeder::class,
            NewsSeeder::class,
            MatchResultSeeder::class,
            FixtureSeeder::class,
        ]);
    }
}
