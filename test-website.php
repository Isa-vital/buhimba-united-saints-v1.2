#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Player;
use App\Models\Sponsor;
use App\Models\News;
use App\Models\Fixture;
use App\Models\NewsletterSubscriber;

// Laravel application bootstrap
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "🧪 TESTING BUHIMBA UNITED SAINTS FC WEBSITE\n";
echo "=" . str_repeat("=", 50) . "\n\n";

// Test 1: Database Models
echo "1️⃣  Testing Database Models...\n";
try {
    $playerCount = Player::count();
    $sponsorCount = Sponsor::count();
    $newsCount = News::count();
    $fixtureCount = Fixture::count();
    
    echo "   ✅ Players: {$playerCount} records\n";
    echo "   ✅ Sponsors: {$sponsorCount} records\n";
    echo "   ✅ News: {$newsCount} records\n";
    echo "   ✅ Fixtures: {$fixtureCount} records\n";
} catch (Exception $e) {
    echo "   ❌ Database Error: " . $e->getMessage() . "\n";
}

// Test 2: Public Controller Methods
echo "\n2️⃣  Testing PublicController Methods...\n";
try {
    $controller = new App\Http\Controllers\PublicController();
    
    // Test home data preparation
    $reflection = new ReflectionClass($controller);
    $method = $reflection->getMethod('index');
    
    echo "   ✅ PublicController instantiated successfully\n";
    echo "   ✅ Index method exists\n";
} catch (Exception $e) {
    echo "   ❌ Controller Error: " . $e->getMessage() . "\n";
}

// Test 3: Route Registration
echo "\n3️⃣  Testing Route Registration...\n";
try {
    $routes = collect(Route::getRoutes())->map(function ($route) {
        return $route->getName();
    })->filter()->values();
    
    $requiredRoutes = [
        'home',
        'players.index',
        'fixtures.index',
        'news.index',
        'sponsors.index',
        'newsletter.subscribe'
    ];
    
    foreach ($requiredRoutes as $route) {
        if ($routes->contains($route)) {
            echo "   ✅ Route '{$route}' registered\n";
        } else {
            echo "   ❌ Route '{$route}' missing\n";
        }
    }
} catch (Exception $e) {
    echo "   ❌ Route Error: " . $e->getMessage() . "\n";
}

// Test 4: Views Exist
echo "\n4️⃣  Testing View Files...\n";
$viewFiles = [
    'layouts/public.blade.php',
    'home.blade.php',
    'players/index.blade.php',
    'fixtures/index.blade.php',
    'news/index.blade.php',
];

foreach ($viewFiles as $view) {
    $path = resource_path("views/{$view}");
    if (file_exists($path)) {
        echo "   ✅ View '{$view}' exists\n";
    } else {
        echo "   ❌ View '{$view}' missing\n";
    }
}

// Test 5: Newsletter Model
echo "\n5️⃣  Testing Newsletter Functionality...\n";
try {
    $testEmail = 'test@buhimba-saints.com';
    
    // Clean up any existing test subscriber
    NewsletterSubscriber::where('email', $testEmail)->forceDelete();
    
    $subscriber = NewsletterSubscriber::create([
        'email' => $testEmail,
        'name' => 'Test Subscriber',
        'is_active' => true,
        'subscribed_at' => now(),
    ]);
    
    echo "   ✅ Newsletter subscription created\n";
    echo "   ✅ Subscriber ID: {$subscriber->id}\n";
    
    // Test token generation
    $token = $subscriber->generateVerificationToken();
    echo "   ✅ Verification token generated\n";
    
    // Clean up
    $subscriber->forceDelete();
    echo "   ✅ Test data cleaned up\n";
    
} catch (Exception $e) {
    echo "   ❌ Newsletter Error: " . $e->getMessage() . "\n";
}

// Test 6: Asset Compilation
echo "\n6️⃣  Testing Asset Compilation...\n";
$cssPath = public_path('build/assets/app.css');
$jsPath = public_path('build/assets/app.js');

if (is_dir(public_path('build'))) {
    echo "   ✅ Build directory exists\n";
    
    // Check for CSS files
    $cssFiles = glob(public_path('build/assets/*.css'));
    if (!empty($cssFiles)) {
        echo "   ✅ CSS files compiled\n";
    } else {
        echo "   ⚠️  CSS files not found\n";
    }
    
    // Check for JS files
    $jsFiles = glob(public_path('build/assets/*.js'));
    if (!empty($jsFiles)) {
        echo "   ✅ JS files compiled\n";
    } else {
        echo "   ⚠️  JS files not found\n";
    }
} else {
    echo "   ❌ Build directory missing - run 'npm run build'\n";
}

echo "\n🏁 TEST COMPLETE!\n";
echo "=" . str_repeat("=", 50) . "\n";
echo "If you see mostly ✅, your website is ready!\n";
echo "Visit: http://127.0.0.1:8000 to see it in action.\n\n";
