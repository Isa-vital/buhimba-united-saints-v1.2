<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

try {
    // Check if table exists
    if (!Schema::hasTable('merchandise')) {
        // Create the merchandise table
        DB::statement('
            CREATE TABLE merchandise (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name VARCHAR(255) NOT NULL,
                type VARCHAR(50) NOT NULL CHECK (type IN ("home_kit", "away_kit", "third_kit", "scarf", "cap", "bag", "accessory", "other")),
                description TEXT,
                price DECIMAL(10, 2) NOT NULL,
                image VARCHAR(255),
                is_active BOOLEAN DEFAULT 1,
                stock_quantity INTEGER DEFAULT 0,
                size_options TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ');
        
        echo "✅ Merchandise table created successfully!\n";
        
        // Insert sample data
        DB::table('merchandise')->insert([
            [
                'name' => 'Official Home Jersey 2024/25',
                'type' => 'home_kit',
                'description' => 'Official Buhimba United Saints FC home jersey for the 2024/25 season.',
                'price' => 75000,
                'stock_quantity' => 50,
                'size_options' => '["S","M","L","XL","XXL"]',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Official Away Jersey 2024/25',
                'type' => 'away_kit',
                'description' => 'Official Buhimba United Saints FC away jersey for the 2024/25 season.',
                'price' => 75000,
                'stock_quantity' => 40,
                'size_options' => '["S","M","L","XL","XXL"]',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Official Third Kit 2024/25',
                'type' => 'third_kit',
                'description' => 'Limited edition third kit in bold gold design.',
                'price' => 80000,
                'stock_quantity' => 25,
                'size_options' => '["S","M","L","XL","XXL"]',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Official Club Scarf',
                'type' => 'scarf',
                'description' => 'Show your support with our official club scarf.',
                'price' => 25000,
                'stock_quantity' => 100,
                'size_options' => null,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        echo "✅ Sample merchandise data inserted!\n";
        
    } else {
        echo "ℹ️ Merchandise table already exists.\n";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
