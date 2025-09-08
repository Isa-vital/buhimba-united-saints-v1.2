<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staffMembers = [
            [
                'first_name' => 'James',
                'last_name' => 'Odoch',
                'role' => 'Head Coach',
                'biography' => 'Experienced coach with over 15 years in Ugandan football. Led multiple teams to championship victories.',
                'nationality' => 'Uganda',
                'is_active' => true,
                'joined_date' => '2023-01-15',
                'sort_order' => 1,
                'qualifications' => ['CAF A License', 'UEFA B License'],
                'social_media' => [
                    'twitter' => '@james_odoch',
                    'instagram' => 'james.odoch.coach'
                ]
            ],
            [
                'first_name' => 'Mary',
                'last_name' => 'Nakato',
                'role' => 'Assistant Coach',
                'biography' => 'Former national team player turned coach. Specializes in player development and tactics.',
                'nationality' => 'Uganda',
                'is_active' => true,
                'joined_date' => '2023-03-01',
                'sort_order' => 2,
                'qualifications' => ['CAF B License', 'Youth Development Certificate'],
                'social_media' => [
                    'twitter' => '@mary_nakato',
                    'facebook' => 'mary.nakato.coach'
                ]
            ],
            [
                'first_name' => 'Peter',
                'last_name' => 'Ssemwogerere',
                'role' => 'Goalkeeper Coach',
                'biography' => 'Former Uganda Cranes goalkeeper with 10+ years of experience training keepers at all levels.',
                'nationality' => 'Uganda',
                'is_active' => true,
                'joined_date' => '2023-02-15',
                'sort_order' => 3,
                'qualifications' => ['Goalkeeper Coaching Certificate', 'CAF C License'],
                'social_media' => [
                    'instagram' => 'peter.keeper.coach'
                ]
            ],
            [
                'first_name' => 'Dr. Sarah',
                'last_name' => 'Asiimwe',
                'role' => 'Team Doctor',
                'biography' => 'Sports medicine specialist with expertise in football injuries and player fitness.',
                'nationality' => 'Uganda',
                'is_active' => true,
                'joined_date' => '2023-01-20',
                'sort_order' => 4,
                'qualifications' => ['Sports Medicine Degree', 'FIFA Medical Certificate'],
                'social_media' => []
            ],
            [
                'first_name' => 'Moses',
                'last_name' => 'Kiggundu',
                'role' => 'Fitness Coach',
                'biography' => 'Professional fitness trainer specializing in football conditioning and injury prevention.',
                'nationality' => 'Uganda',
                'is_active' => true,
                'joined_date' => '2023-04-01',
                'sort_order' => 5,
                'qualifications' => ['Fitness Training Certificate', 'Sports Science Degree'],
                'social_media' => [
                    'instagram' => 'moses.fitness'
                ]
            ]
        ];

        foreach ($staffMembers as $staff) {
            Staff::create($staff);
        }
    }
}
