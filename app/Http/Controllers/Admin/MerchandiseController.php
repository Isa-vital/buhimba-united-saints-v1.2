<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandise = Merchandise::latest()->paginate(10);
        return view('admin.merchandise.index', compact('merchandise'));
    }

    public function create()
    {
        return view('admin.merchandise.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:home_kit,away_kit,third_kit,scarf,cap,bag,accessory,other',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock_quantity' => 'required|integer|min:0',
            'size_options' => 'nullable|array',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('merchandise', 'public');
        }

        Merchandise::create($data);

        return redirect()->route('admin.merchandise.index')
            ->with('success', 'Merchandise item created successfully.');
    }

    public function show(Merchandise $merchandise)
    {
        return view('admin.merchandise.show', compact('merchandise'));
    }

    public function edit(Merchandise $merchandise)
    {
        return view('admin.merchandise.edit', compact('merchandise'));
    }

    public function update(Request $request, Merchandise $merchandise)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:home_kit,away_kit,third_kit,scarf,cap,bag,accessory,other',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock_quantity' => 'required|integer|min:0',
            'size_options' => 'nullable|array',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($merchandise->image) {
                Storage::disk('public')->delete($merchandise->image);
            }
            $data['image'] = $request->file('image')->store('merchandise', 'public');
        }

        $merchandise->update($data);

        return redirect()->route('admin.merchandise.index')
            ->with('success', 'Merchandise item updated successfully.');
    }

    public function destroy(Merchandise $merchandise)
    {
        if ($merchandise->image) {
            Storage::disk('public')->delete($merchandise->image);
        }

        $merchandise->delete();

        return redirect()->route('admin.merchandise.index')
            ->with('success', 'Merchandise item deleted successfully.');
    }
}
