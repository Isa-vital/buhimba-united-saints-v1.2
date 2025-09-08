<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MatchResult;
use App\Models\Fixture;
use Illuminate\Http\Request;

class MatchResultController extends Controller
{
    public function index()
    {
        $results = MatchResult::with('fixture')->latest('match_date')->paginate(15);
        return view('admin.results.index', compact('results'));
    }

    public function create()
    {
        $fixtures = Fixture::where('status', 'completed')->get();
        return view('admin.results.create', compact('fixtures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fixture_id' => 'nullable|exists:fixtures,id',
            'opponent' => 'required|string|max:255',
            'match_date' => 'required|date',
            'home_score' => 'required|integer|min:0',
            'away_score' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'competition' => 'required|string|max:255',
            'is_home' => 'boolean',
            'attendance' => 'nullable|integer|min:0',
            'match_report' => 'nullable|string',
        ]);

        $data = $request->all();
        
        // Set venue based on is_home
        $data['venue'] = $request->is_home ? 'Home' : 'Away';

        MatchResult::create($data);

        return redirect()->route('admin.results.index')->with('success', 'Match result created successfully!');
    }

    public function show(MatchResult $result)
    {
        return view('admin.results.show', compact('result'));
    }

    public function edit(MatchResult $result)
    {
        $fixtures = Fixture::where('status', 'completed')->get();
        return view('admin.results.edit', compact('result', 'fixtures'));
    }

    public function update(Request $request, MatchResult $result)
    {
        $request->validate([
            'fixture_id' => 'nullable|exists:fixtures,id',
            'opponent' => 'required|string|max:255',
            'match_date' => 'required|date',
            'home_score' => 'required|integer|min:0',
            'away_score' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'competition' => 'required|string|max:255',
            'is_home' => 'boolean',
            'attendance' => 'nullable|integer|min:0',
            'match_report' => 'nullable|string',
        ]);

        $data = $request->all();
        
        // Set venue based on is_home
        $data['venue'] = $request->is_home ? 'Home' : 'Away';

        $result->update($data);

        return redirect()->route('admin.results.index')->with('success', 'Match result updated successfully!');
    }

    public function destroy(MatchResult $result)
    {
        $result->delete();

        return redirect()->route('admin.results.index')->with('success', 'Match result deleted successfully!');
    }
}
