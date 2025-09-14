<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Staff;
use App\Models\Fixture;
use App\Models\MatchResult;
use App\Models\News;
use App\Models\Sponsor;
use App\Models\LeagueTable;
use App\Models\NewsletterSubscriber;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{
    public function index($view = 'home')
    {
        // Get next fixture
        $nextFixture = Fixture::where('match_date', '>', now())
            ->where('is_completed', false)
            ->orderBy('match_date')
            ->first();

        // Get latest result
        $latestResult = MatchResult::with('fixture')
            ->latest('created_at')
            ->first();

        // Get featured news (latest 3)
        $featuredNews = News::where('is_published', true)
            ->with('author')
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        // Get sponsors
        $sponsors = Sponsor::where('is_active', true)
            ->orderBy('tier')
            ->orderBy('name')
            ->get();

        // Get key players for homepage
        $keyPlayers = Player::active()
            ->where('is_featured', true)
            ->orderBy('shirt_number')
            ->limit(4)
            ->get();

        // Get top scorers for statistics
        $topScorers = Player::active()
            ->orderBy('goals', 'desc')
            ->limit(5)
            ->get();

        // Team statistics
        $totalPlayers = Player::active()->count();
        $totalStaff = Staff::active()->count();
        $totalMatches = Fixture::count();
        $totalTrophies = 15; // This could come from a trophies table

        // Get merchandise for display
        try {
            $merchandise = Merchandise::active()->get();
        } catch (\Exception $e) {
            $merchandise = collect(); // Empty collection if table doesn't exist
        }

        return view($view, compact(
            'nextFixture',
            'latestResult',
            'featuredNews',
            'sponsors',
            'keyPlayers',
            'topScorers',
            'totalPlayers',
            'totalStaff',
            'totalMatches',
            'totalTrophies',
            'merchandise'
        ));
    }

    public function players()
    {
        $players = Player::active()
            ->orderBy('shirt_number')
            ->get()
            ->groupBy('position');

        return view('public.players', compact('players'));
    }

    public function staff()
    {
        $staff = Staff::active()
            ->orderBy('sort_order')
            ->orderBy('role')
            ->get();

        return view('public.staff', compact('staff'));
    }

    public function fixtures()
    {
        // Get upcoming fixtures (not completed and in the future)
        $upcomingFixtures = Fixture::where('match_date', '>', now())
            ->where('is_completed', false)
            ->orderBy('match_date')
            ->get();

        // Get recent fixtures (completed or in the past)
        $recentFixtures = Fixture::where(function ($query) {
            $query->where('match_date', '<=', now())
                ->orWhere('is_completed', true);
        })
            ->orderBy('match_date', 'desc')
            ->limit(5)
            ->get();

        $nextFixture = $upcomingFixtures->first();

        return view('public.fixtures', compact('upcomingFixtures', 'recentFixtures', 'nextFixture'));
    }

    public function results()
    {
        $results = MatchResult::orderBy('match_date', 'desc')
            ->paginate(10);

        $lastResult = $results->first();

        // Calculate season stats for Buhimba United Saints FC
        $buhimbaResults = MatchResult::all();

        $seasonStats = [
            'matches' => $buhimbaResults->count(),
            'wins' => $buhimbaResults->filter(function ($match) {
                if ($match->is_home) {
                    return $match->home_score > $match->away_score;
                } else {
                    return $match->away_score > $match->home_score;
                }
            })->count(),
            'draws' => $buhimbaResults->filter(function ($match) {
                return $match->home_score == $match->away_score;
            })->count(),
            'losses' => $buhimbaResults->filter(function ($match) {
                if ($match->is_home) {
                    return $match->home_score < $match->away_score;
                } else {
                    return $match->away_score < $match->home_score;
                }
            })->count(),
            'goals_for' => $buhimbaResults->sum(function ($match) {
                return $match->is_home ? $match->home_score : $match->away_score;
            }),
            'goals_against' => $buhimbaResults->sum(function ($match) {
                return $match->is_home ? $match->away_score : $match->home_score;
            }),
        ];

        $seasonStats['goal_difference'] = $seasonStats['goals_for'] - $seasonStats['goals_against'];

        // Recent form (last 5 matches)
        $recentForm = $buhimbaResults->sortByDesc('match_date')->take(5)->map(function ($match) {
            if ($match->home_score == $match->away_score) return 'D';

            if ($match->is_home) {
                return $match->home_score > $match->away_score ? 'W' : 'L';
            } else {
                return $match->away_score > $match->home_score ? 'W' : 'L';
            }
        })->toArray();

        return view('public.results', compact('results', 'lastResult', 'seasonStats', 'recentForm'));
    }

    public function leagueTable()
    {
        $leagueTable = LeagueTable::orderBy('position')->get();
        $ourPosition = $leagueTable->where('team_name', 'Buhimba United Saints FC')->first();
        $totalMatches = $leagueTable->sum('matches_played');
        $totalGoals = $leagueTable->sum('goals_for');
        $matchday = $leagueTable->max('matches_played');

        return view('public.league-table', compact('leagueTable', 'ourPosition', 'totalMatches', 'totalGoals', 'matchday'));
    }

    public function news(Request $request)
    {
        $query = News::where('is_published', true)->with('author');

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                    ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }

        $news = $query->orderBy('published_at', 'desc')->paginate(9);

        $featuredNews = News::where('is_published', true)
            ->where('is_featured', true)
            ->with('author')
            ->latest('published_at')
            ->first();

        $latestNews = $news->first();

        $categories = News::where('is_published', true)
            ->distinct()
            ->pluck('category')
            ->filter();

        return view('public.news', compact('news', 'featuredNews', 'latestNews', 'categories'));
    }

    public function newsShow($slug)
    {
        $news = News::where('slug', $slug)
            ->where('is_published', true)
            ->with('author')
            ->firstOrFail();

        // Increment view count
        $news->increment('views');

        // Get previous and next articles
        $previousNews = News::where('is_published', true)
            ->where('published_at', '<', $news->published_at)
            ->orderBy('published_at', 'desc')
            ->first();

        $nextNews = News::where('is_published', true)
            ->where('published_at', '>', $news->published_at)
            ->orderBy('published_at', 'asc')
            ->first();

        // Get related articles
        $relatedNews = News::where('is_published', true)
            ->where('id', '!=', $news->id)
            ->where('category', $news->category)
            ->with('author')
            ->take(3)
            ->get();

        return view('public.news-detail', compact('news', 'relatedNews', 'previousNews', 'nextNews'));
    }

    public function sponsors()
    {
        $sponsors = Sponsor::where('is_active', true)
            ->orderBy('sponsor_type')
            ->orderBy('company_name')
            ->get();

        return view('public.sponsors', compact('sponsors'));
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Here you would typically send an email or store in database
        // For now, just return success message

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function subscribeNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscribers,email',
            'name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            if ($validator->errors()->has('email')) {
                if (str_contains($validator->errors()->first('email'), 'unique')) {
                    return response()->json([
                        'success' => false,
                        'message' => 'This email is already subscribed to our newsletter.'
                    ], 422);
                }
            }
            return response()->json([
                'success' => false,
                'message' => 'Please provide a valid email address.'
            ], 422);
        }

        try {
            $subscriber = NewsletterSubscriber::create([
                'email' => $request->email,
                'name' => $request->name,
                'subscribed_at' => now(),
                'is_active' => true,
            ]);

            // Generate verification token if email verification is needed
            $subscriber->generateVerificationToken();

            return response()->json([
                'success' => true,
                'message' => 'Successfully subscribed to our newsletter! Welcome to the Saints family! 🟢⚪'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    public function unsubscribeNewsletter(Request $request)
    {
        $email = $request->email;

        $subscriber = NewsletterSubscriber::where('email', $email)->first();

        if ($subscriber) {
            $subscriber->unsubscribe();
            return response()->json([
                'success' => true,
                'message' => 'Successfully unsubscribed from newsletter.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Email not found in our newsletter subscribers.'
        ], 404);
    }
}
