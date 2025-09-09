<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Fixture;
use App\Models\MatchResult;
use App\Models\News;
use App\Models\Sponsor;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        // Get next upcoming fixture
        $nextFixture = Fixture::where('match_date', '>', now())
            ->where('is_completed', false)
            ->orderBy('match_date')
            ->first();

        // Get latest match result
        $latestResult = MatchResult::orderBy('match_date', 'desc')->first();

        // Get latest news (featured and recent)
        $featuredNews = News::where('is_published', true)
            ->where('is_featured', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $recentNews = News::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(6)
            ->get();

        // Get top sponsors
        $sponsors = Sponsor::where('is_active', true)
            ->where('show_on_website', true)
            ->orderBy('sort_order')
            ->take(8)
            ->get();

        // Get top scorers
        $topScorers = Player::active()
            ->topScorers(5)
            ->get();

        // Get key players for spotlight
        $keyPlayers = Player::active()
            ->orderBy('goals', 'desc')
            ->take(6)
            ->get();

        // Get total players count
        $totalPlayers = Player::active()->count();

        // Get merchandise for display
        try {
            $merchandise = Merchandise::all(); // Get all merchandise for debugging
            Log::info('Merchandise count: ' . $merchandise->count());
            foreach($merchandise as $item) {
                Log::info('Item: ' . $item->name . ' - Active: ' . ($item->is_active ? 'Yes' : 'No'));
            }
        } catch (\Exception $e) {
            Log::error('Merchandise error: ' . $e->getMessage());
            $merchandise = collect(); // Empty collection if table doesn't exist
        }

        return view('home_professional', compact(
            'nextFixture',
            'latestResult', 
            'featuredNews',
            'recentNews',
            'sponsors',
            'topScorers',
            'keyPlayers',
            'totalPlayers',
            'merchandise'
        ));
    }
}
