<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\FixtureController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\MatchResultController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function() {
    $controller = new App\Http\Controllers\PublicController();
    return $controller->index('home_professional');
})->name('home');

// Team Pages
Route::get('/players', [PublicController::class, 'players'])->name('players.index');
Route::get('/staff', [PublicController::class, 'staff'])->name('staff.index');

// Match Pages
Route::get('/fixtures', [PublicController::class, 'fixtures'])->name('fixtures.index');
Route::get('/results', [PublicController::class, 'results'])->name('results.index');
Route::get('/league-table', [PublicController::class, 'leagueTable'])->name('league-table.index');

// News Pages
Route::get('/news', [PublicController::class, 'news'])->name('news.index');
Route::get('/news/{slug}', [PublicController::class, 'newsShow'])->name('news.show');

// Other Pages
Route::get('/sponsors', [PublicController::class, 'sponsors'])->name('sponsors.index');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicController::class, 'contactSubmit'])->name('contact.submit');

// Newsletter Routes
Route::post('/newsletter/subscribe', [PublicController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');
Route::post('/newsletter/unsubscribe', [PublicController::class, 'unsubscribeNewsletter'])->name('newsletter.unsubscribe');

// Admin Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes (Protected)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Resource Routes
    Route::resource('players', PlayerController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('fixtures', FixtureController::class);
    Route::resource('results', MatchResultController::class);
    Route::resource('news', NewsController::class);
    Route::resource('sponsors', SponsorController::class);
    Route::resource('users', UserController::class);
    
    // Settings Routes
    Route::get('settings/images', [App\Http\Controllers\Admin\SettingsController::class, 'images'])->name('settings.images');
    Route::post('settings/upload-image', [App\Http\Controllers\Admin\SettingsController::class, 'uploadImage'])->name('settings.upload-image');
    Route::delete('settings/delete-image', [App\Http\Controllers\Admin\SettingsController::class, 'deleteImage'])->name('settings.delete-image');
});

// User Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
