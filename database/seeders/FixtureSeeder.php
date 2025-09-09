<?php

namespace Database\Seeders;

use App\Models\Fixture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FixtureSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $fixtures = [
            [
                'home_team' => 'Buhimba United Saints FC',
                'away_team' => 'KCCA FC',
                'match_date' => Carbon::now()->addDays(5)->setTime(16, 0),
                'venue' => 'Buhimba Stadium',
                'location' => 'Buhimba',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 9,
                'is_completed' => false,
                'ticket_price' => 10000,
                'match_preview' => 'Exciting match against KCCA FC at home. Our team is looking to continue the winning streak.',
            ],
            [
                'home_team' => 'URA FC',
                'away_team' => 'Buhimba United Saints FC',
                'match_date' => Carbon::now()->addDays(12)->setTime(15, 30),
                'venue' => 'Tax Centre Stadium',
                'location' => 'Nakawa',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 10,
                'is_completed' => false,
                'ticket_price' => 8000,
                'match_preview' => 'Away fixture against URA FC. A crucial match for league standings.',
            ],
            [
                'home_team' => 'Buhimba United Saints FC',
                'away_team' => 'Vipers SC',
                'match_date' => Carbon::now()->addDays(19)->setTime(16, 30),
                'venue' => 'Buhimba Stadium',
                'location' => 'Buhimba',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 11,
                'is_completed' => false,
                'ticket_price' => 15000,
                'match_preview' => 'Big match against defending champions Vipers SC at home.',
            ],
            [
                'home_team' => 'Express FC',
                'away_team' => 'Buhimba United Saints FC',
                'match_date' => Carbon::now()->addDays(26)->setTime(14, 0),
                'venue' => 'Wankulukuku Stadium',
                'location' => 'Kampala',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 12,
                'is_completed' => false,
                'ticket_price' => 5000,
                'match_preview' => 'Away trip to Express FC. Looking to get maximum points on the road.',
            ],
            [
                'home_team' => 'Buhimba United Saints FC',
                'away_team' => 'SC Villa',
                'match_date' => Carbon::now()->addDays(33)->setTime(15, 0),
                'venue' => 'Buhimba Stadium',
                'location' => 'Buhimba',
                'competition' => 'Uganda Cup',
                'match_type' => 'Cup',
                'season' => 2025,
                'matchday' => null,
                'is_completed' => false,
                'ticket_price' => 12000,
                'match_preview' => 'Uganda Cup quarter-final clash against SC Villa.',
            ],
        ];

        foreach ($fixtures as $fixture) {
            Fixture::create($fixture);
        }
    }
}
