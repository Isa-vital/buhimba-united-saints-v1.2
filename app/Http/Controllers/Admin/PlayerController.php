<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::orderBy('shirt_number')->paginate(20);
        return view('admin.players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'shirt_number' => 'required|integer|unique:players,shirt_number',
            'position' => 'required|in:Goalkeeper,Defender,Midfielder,Forward',
            'date_of_birth' => 'nullable|date',
            'nationality' => 'required|string|max:255',
            'biography' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'height' => 'nullable|numeric|min:1.0|max:2.5',
            'weight' => 'nullable|numeric|min:40|max:150',
            'preferred_foot' => 'nullable|in:Left,Right,Both',
            'social_media' => 'nullable|json',
            'joined_date' => 'nullable|date',
            'contract_end' => 'nullable|date',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('players', 'public');
        }

        if ($request->filled('social_media_facebook') || $request->filled('social_media_twitter') || $request->filled('social_media_instagram')) {
            $validated['social_media'] = json_encode([
                'facebook' => $request->input('social_media_facebook'),
                'twitter' => $request->input('social_media_twitter'),
                'instagram' => $request->input('social_media_instagram'),
            ]);
        }

        Player::create($validated);

        return redirect()->route('admin.players.index')->with('success', 'Player created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('admin.players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('admin.players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'shirt_number' => 'required|integer|unique:players,shirt_number,' . $player->id,
            'position' => 'required|in:Goalkeeper,Defender,Midfielder,Forward',
            'date_of_birth' => 'nullable|date',
            'nationality' => 'required|string|max:255',
            'biography' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'height' => 'nullable|numeric|min:1.0|max:2.5',
            'weight' => 'nullable|numeric|min:40|max:150',
            'preferred_foot' => 'nullable|in:Left,Right,Both',
            'joined_date' => 'nullable|date',
            'contract_end' => 'nullable|date',
            'appearances' => 'nullable|integer|min:0',
            'goals' => 'nullable|integer|min:0',
            'assists' => 'nullable|integer|min:0',
            'yellow_cards' => 'nullable|integer|min:0',
            'red_cards' => 'nullable|integer|min:0',
            'minutes_played' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old photo
            if ($player->photo) {
                Storage::disk('public')->delete($player->photo);
            }
            $validated['photo'] = $request->file('photo')->store('players', 'public');
        }

        if ($request->filled('social_media_facebook') || $request->filled('social_media_twitter') || $request->filled('social_media_instagram')) {
            $validated['social_media'] = json_encode([
                'facebook' => $request->input('social_media_facebook'),
                'twitter' => $request->input('social_media_twitter'),
                'instagram' => $request->input('social_media_instagram'),
            ]);
        }

        $player->update($validated);

        return redirect()->route('admin.players.index')->with('success', 'Player updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        if ($player->photo) {
            Storage::disk('public')->delete($player->photo);
        }

        $player->delete();

        return redirect()->route('admin.players.index')->with('success', 'Player deleted successfully.');
    }
}
