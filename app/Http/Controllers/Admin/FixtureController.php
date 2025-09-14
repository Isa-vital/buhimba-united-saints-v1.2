<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index()
    {
        $fixtures = Fixture::latest('match_date')->paginate(15);
        return view('admin.fixtures.index', compact('fixtures'));
    }

    public function create()
    {
        return view('admin.fixtures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'opponent' => 'required|string|max:255',
            'match_date' => 'required|date',
            'venue' => 'required|in:Home,Away,Neutral',
            'location' => 'nullable|string|max:255',
            'competition' => 'required|string|max:255',
            'match_type' => 'nullable|string|max:255',
            'season' => 'nullable|integer|min:2020|max:2030',
            'matchday' => 'nullable|integer|min:1|max:50',
            'preview' => 'nullable|string',
            'is_completed' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_completed'] = $request->has('is_completed');

        Fixture::create($data);

        return redirect()->route('admin.fixtures.index')->with('success', 'Fixture created successfully!');
    }

    public function show(Fixture $fixture)
    {
        return view('admin.fixtures.show', compact('fixture'));
    }

    public function edit(Fixture $fixture)
    {
        return view('admin.fixtures.edit', compact('fixture'));
    }

    public function update(Request $request, Fixture $fixture)
    {
        $request->validate([
            'opponent' => 'required|string|max:255',
            'match_date' => 'required|date',
            'venue' => 'required|in:Home,Away,Neutral',
            'location' => 'nullable|string|max:255',
            'competition' => 'required|string|max:255',
            'match_type' => 'nullable|string|max:255',
            'season' => 'nullable|integer|min:2020|max:2030',
            'matchday' => 'nullable|integer|min:1|max:50',
            'preview' => 'nullable|string',
            'is_completed' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_completed'] = $request->has('is_completed');

        $fixture->update($data);

        return redirect()->route('admin.fixtures.index')->with('success', 'Fixture updated successfully!');
    }

    public function destroy(Fixture $fixture)
    {
        $fixture->delete();

        return redirect()->route('admin.fixtures.index')->with('success', 'Fixture deleted successfully!');
    }
}
