<?php

namespace Database\Seeders;

use App\Models\MatchResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MatchResultSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $matches = [
            [
                'opponent' => 'KCCA FC',
                'match_date' => Carbon::now()->subDays(7),
                'venue' => 'Home',
                'location' => 'Buhimba Stadium',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 8,
                'home_score' => 2,
                'away_score' => 1,
                'is_home' => true,
                'goalscorers' => [
                    ['player' => 'John Doe', 'minute' => 23],
                    ['player' => 'Alex Smith', 'minute' => 67],
                ],
                'assists' => [
                    ['player' => 'Mike Johnson', 'minute' => 23],
                    ['player' => 'David Wilson', 'minute' => 67],
                ],
                'yellow_cards' => [
                    ['player' => 'Chris Brown', 'minute' => 45],
                ],
                'red_cards' => [],
                'man_of_match' => 'John Doe',
                'attendance' => 15000,
                'referee' => 'George Olemu',
                'match_report' => 'A thrilling match where Buhimba United Saints FC secured a 2-1 victory against KCCA FC with goals from John Doe and Alex Smith.',
            ],
            [
                'opponent' => 'Vipers SC',
                'match_date' => Carbon::now()->subDays(14),
                'venue' => 'Away',
                'location' => 'St. Mary\'s Stadium',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 7,
                'home_score' => 1,
                'away_score' => 1,
                'is_home' => false,
                'goalscorers' => [
                    ['player' => 'Alex Smith', 'minute' => 34],
                ],
                'assists' => [
                    ['player' => 'John Doe', 'minute' => 34],
                ],
                'yellow_cards' => [
                    ['player' => 'Mike Johnson', 'minute' => 78],
                    ['player' => 'David Wilson', 'minute' => 82],
                ],
                'red_cards' => [],
                'man_of_match' => 'Alex Smith',
                'attendance' => 25000,
                'referee' => 'Brian Nsubuga',
                'match_report' => 'A well-fought draw against Vipers SC with Alex Smith scoring the equalizer.',
            ],
            [
                'opponent' => 'SC Villa',
                'match_date' => Carbon::now()->subDays(21),
                'venue' => 'Home',
                'location' => 'Buhimba Stadium',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 6,
                'home_score' => 3,
                'away_score' => 0,
                'is_home' => true,
                'goalscorers' => [
                    ['player' => 'John Doe', 'minute' => 12],
                    ['player' => 'John Doe', 'minute' => 45],
                    ['player' => 'Chris Brown', 'minute' => 78],
                ],
                'assists' => [
                    ['player' => 'Alex Smith', 'minute' => 12],
                    ['player' => 'Mike Johnson', 'minute' => 45],
                    ['player' => 'David Wilson', 'minute' => 78],
                ],
                'yellow_cards' => [],
                'red_cards' => [],
                'man_of_match' => 'John Doe',
                'attendance' => 18000,
                'referee' => 'Moses Oloya',
                'match_report' => 'Dominant 3-0 victory against SC Villa with John Doe scoring a brace.',
            ],
            [
                'opponent' => 'Express FC',
                'match_date' => Carbon::now()->subDays(28),
                'venue' => 'Away',
                'location' => 'Wankulukuku Stadium',
                'competition' => 'Uganda Premier League',
                'match_type' => 'League',
                'season' => 2025,
                'matchday' => 5,
                'home_score' => 0,
                'away_score' => 2,
                'is_home' => false,
                'goalscorers' => [
                    ['player' => 'Alex Smith', 'minute' => 28],
                    ['player' => 'Mike Johnson', 'minute' => 71],
                ],
                'assists' => [
                    ['player' => 'John Doe', 'minute' => 28],
                    ['player' => 'Chris Brown', 'minute' => 71],
                ],
                'yellow_cards' => [
                    ['player' => 'David Wilson', 'minute' => 55],
                ],
                'red_cards' => [],
                'man_of_match' => 'Alex Smith',
                'attendance' => 12000,
                'referee' => 'Ali Sabilla',
                'match_report' => 'Impressive 2-0 away victory against Express FC.',
            ],
        ];

        foreach ($matches as $match) {
            MatchResult::create($match);
        }
    }
}
