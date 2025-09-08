<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function images()
    {
        return view('admin.settings.images');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:logo,hero-logo,hero-background,favicon'
        ]);

        $imageType = $request->input('type');
        $image = $request->file('image');
        
        // Define the filename based on type
        $filename = match($imageType) {
            'logo' => 'club-logo.png',
            'hero-logo' => 'logo.png', 
            'hero-background' => 'hero-background.jpg',
            'favicon' => 'favicon.ico'
        };

        // Move the image to public/images directory
        $destinationPath = public_path('images');
        $image->move($destinationPath, $filename);

        return redirect()->back()->with('success', ucfirst(str_replace('-', ' ', $imageType)) . ' updated successfully!');
    }

    public function deleteImage(Request $request)
    {
        $request->validate([
            'type' => 'required|in:logo,hero-logo,hero-background,favicon'
        ]);

        $imageType = $request->input('type');
        
        $filename = match($imageType) {
            'logo' => 'club-logo.png',
            'hero-logo' => 'logo.png',
            'hero-background' => 'hero-background.jpg', 
            'favicon' => 'favicon.ico'
        };

        $filepath = public_path('images/' . $filename);
        
        if (file_exists($filepath)) {
            unlink($filepath);
            return redirect()->back()->with('success', ucfirst(str_replace('-', ' ', $imageType)) . ' deleted successfully!');
        }

        return redirect()->back()->with('error', 'Image not found!');
    }
}
