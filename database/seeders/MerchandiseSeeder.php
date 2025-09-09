<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merchandise = [
            [
                'name' => 'Official Home Jersey 2024/25',
                'type' => 'home_kit',
                'description' => 'Official Buhimba United Saints FC home jersey for the 2024/25 season. Features the club crest, sponsor logos, and premium quality fabric.',
                'price' => 75000,
                'stock_quantity' => 50,
                'size_options' => ['S', 'M', 'L', 'XL', 'XXL'],
                'is_active' => true,
            ],
            [
                'name' => 'Official Away Jersey 2024/25',
                'type' => 'away_kit',
                'description' => 'Official Buhimba United Saints FC away jersey for the 2024/25 season. Clean white design with green accents.',
                'price' => 75000,
                'stock_quantity' => 40,
                'size_options' => ['S', 'M', 'L', 'XL', 'XXL'],
                'is_active' => true,
            ],
            [
                'name' => 'Official Third Kit 2024/25',
                'type' => 'third_kit',
                'description' => 'Limited edition third kit in bold gold design. Perfect for special occasions and matches.',
                'price' => 80000,
                'stock_quantity' => 25,
                'size_options' => ['S', 'M', 'L', 'XL', 'XXL'],
                'is_active' => true,
            ],
            [
                'name' => 'Official Club Scarf',
                'type' => 'scarf',
                'description' => 'Show your support with our official club scarf. Perfect for match days and cold weather.',
                'price' => 25000,
                'stock_quantity' => 100,
                'size_options' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Club Baseball Cap',
                'type' => 'cap',
                'description' => 'Official club baseball cap with embroidered logo. One size fits all.',
                'price' => 35000,
                'stock_quantity' => 75,
                'size_options' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Team Sports Bag',
                'type' => 'bag',
                'description' => 'Durable sports bag with club branding. Perfect for training and match days.',
                'price' => 45000,
                'stock_quantity' => 30,
                'size_options' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Club Keychain',
                'type' => 'accessory',
                'description' => 'Metal keychain with club logo. Great for fans and collectors.',
                'price' => 15000,
                'stock_quantity' => 200,
                'size_options' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Phone Case (iPhone/Samsung)',
                'type' => 'accessory',
                'description' => 'Protective phone case featuring club colors and logo. Available for various phone models.',
                'price' => 20000,
                'stock_quantity' => 60,
                'size_options' => null,
                'is_active' => true,
            ],
        ];

        foreach ($merchandise as $item) {
            Merchandise::create($item);
        }
    }
}
