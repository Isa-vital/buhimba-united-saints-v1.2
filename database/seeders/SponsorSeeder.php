<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsors = [
            [
                'name' => 'MTN Uganda',
                'description' => 'Leading telecommunications company providing mobile and internet services across Uganda.',
                'website' => 'https://www.mtn.co.ug',
                'contact_email' => 'sponsorship@mtn.co.ug',
                'sponsorship_type' => 'Main',
                'sponsorship_level' => 'Platinum',
                'contract_start' => '2024-01-01',
                'contract_end' => '2026-12-31',
                'contract_value' => 150000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Stanbic Bank Uganda',
                'description' => 'Premier banking services and financial solutions for individuals and businesses.',
                'website' => 'https://www.stanbicbank.co.ug',
                'contact_email' => 'marketing@stanbic.com',
                'sponsorship_type' => 'Kit',
                'sponsorship_level' => 'Gold',
                'contract_start' => '2024-01-01',
                'contract_end' => '2025-12-31',
                'contract_value' => 75000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Coca-Cola Uganda',
                'description' => 'Refreshing beverages and soft drinks for every occasion.',
                'website' => 'https://www.coca-cola.com',
                'contact_email' => 'partnerships@coca-cola.ug',
                'sponsorship_type' => 'Official Partner',
                'sponsorship_level' => 'Gold',
                'contract_start' => '2024-01-01',
                'contract_end' => '2025-12-31',
                'contract_value' => 50000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Uganda Breweries Limited',
                'description' => 'Premium beers and beverages brewed with the finest ingredients.',
                'website' => 'https://www.ugandabreweries.com',
                'contact_email' => 'sponsorship@ubl.co.ug',
                'sponsorship_type' => 'Official Partner',
                'sponsorship_level' => 'Silver',
                'contract_start' => '2024-01-01',
                'contract_end' => '2025-06-30',
                'contract_value' => 30000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Airtel Uganda',
                'description' => 'Innovative mobile network services and digital solutions.',
                'website' => 'https://www.airtel.ug',
                'contact_email' => 'corporate@airtel.ug',
                'sponsorship_type' => 'Official Partner',
                'sponsorship_level' => 'Silver',
                'contract_start' => '2024-01-01',
                'contract_end' => '2025-12-31',
                'contract_value' => 25000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Pepsi Uganda',
                'description' => 'Bold and refreshing cola drinks for the young generation.',
                'website' => 'https://www.pepsi.com',
                'contact_email' => 'marketing@pepsi.ug',
                'sponsorship_type' => 'Official Partner',
                'sponsorship_level' => 'Bronze',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'contract_value' => 15000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Total Energies Uganda',
                'description' => 'Quality fuel and energy solutions for transportation and industry.',
                'website' => 'https://www.totalenergies.ug',
                'contact_email' => 'partnerships@total.ug',
                'sponsorship_type' => 'Official Partner',
                'sponsorship_level' => 'Bronze',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'contract_value' => 12000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'New Vision Group',
                'description' => 'Leading media house providing news and information services.',
                'website' => 'https://www.newvision.co.ug',
                'contact_email' => 'advertising@newvision.co.ug',
                'sponsorship_type' => 'Media Partner',
                'sponsorship_level' => 'Bronze',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'contract_value' => 8000.00,
                'is_active' => true,
                'show_on_website' => true,
                'sort_order' => 8,
            ],
        ];

        foreach ($sponsors as $sponsorData) {
            Sponsor::create($sponsorData);
        }
    }
}
