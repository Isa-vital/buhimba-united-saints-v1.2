<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin Role
        $adminRole = Role::create([
            'name' => 'Admin',
            'description' => 'Full system access with all permissions',
            'permissions' => [
                'manage_users',
                'manage_players',
                'manage_staff',
                'manage_fixtures',
                'manage_matches',
                'manage_news',
                'manage_sponsors',
                'manage_league_table',
                'view_analytics',
                'system_settings',
            ],
        ]);

        // Create Media Officer Role
        $mediaRole = Role::create([
            'name' => 'Media Officer',
            'description' => 'Manage news, media content and match reports',
            'permissions' => [
                'manage_news',
                'manage_matches',
                'view_players',
                'view_fixtures',
                'upload_media',
            ],
        ]);

        // Create Editor Role
        $editorRole = Role::create([
            'name' => 'Editor',
            'description' => 'Edit content and manage basic club information',
            'permissions' => [
                'manage_players',
                'manage_fixtures',
                'manage_sponsors',
                'view_analytics',
            ],
        ]);

        // Assign roles to existing users
        $adminUser = User::where('email', 'admin@buhimbasaints.com')->first();
        if ($adminUser) {
            $adminUser->roles()->attach($adminRole->id);
        }

        $mediaUser = User::where('email', 'media@buhimbasaints.com')->first();
        if ($mediaUser) {
            $mediaUser->roles()->attach($mediaRole->id);
        }
    }
}
