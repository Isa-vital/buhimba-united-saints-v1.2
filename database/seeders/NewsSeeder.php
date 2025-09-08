<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\User;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('email', 'admin@buhimbasaints.com')->first();
        $media = User::where('email', 'media@buhimbasaints.com')->first();

        $newsArticles = [
            [
                'title' => 'Buhimba United Saints Beat Express FC 2-1',
                'slug' => 'buhimba-united-saints-beat-express-fc-2-1',
                'excerpt' => 'Amazing comeback victory in the Uganda Premier League showcases team spirit and determination.',
                'content' => 'Buhimba United Saints secured a thrilling 2-1 victory against Express FC in yesterday\'s Uganda Premier League match at the Buhimba Stadium. The Saints showed incredible resilience, coming from behind to claim all three points in front of their passionate home supporters.',
                'author_id' => $admin ? $admin->id : 1,
                'is_published' => true,
                'is_featured' => true,
                'category' => 'Match Results',
                'tags' => 'match,victory,express-fc,upl',
                'published_at' => now(),
                'views' => 156,
            ],
            [
                'title' => 'New Signing: John Doe Joins Buhimba United Saints',
                'slug' => 'new-signing-john-doe-joins-buhimba-united-saints',
                'excerpt' => 'Talented midfielder signs 2-year contract with the Saints.',
                'content' => 'We are pleased to announce the signing of midfielder John Doe from Vipers SC. The 24-year-old brings creativity and pace to our midfield. Manager praised his technical ability and winning mentality.',
                'author_id' => $media ? $media->id : 1,
                'is_published' => true,
                'is_featured' => false,
                'category' => 'Transfers',
                'tags' => 'signing,transfer,midfielder',
                'published_at' => now()->subHours(6),
                'views' => 89,
            ],
            [
                'title' => 'Training Camp Preparation for Next Season',
                'slug' => 'training-camp-preparation-next-season',
                'excerpt' => 'Saints announce pre-season training schedule and friendly matches.',
                'content' => 'Buhimba United Saints will begin their pre-season training camp next month. The coaching staff has planned intensive training sessions and several friendly matches to prepare for the upcoming Uganda Premier League season.',
                'author_id' => $admin ? $admin->id : 1,
                'is_published' => true,
                'is_featured' => false,
                'category' => 'Training',
                'tags' => 'training,preseason,preparation',
                'published_at' => now()->subDays(2),
                'views' => 67,
            ],
            [
                'title' => 'Community Outreach Program Launch',
                'slug' => 'community-outreach-program-launch',
                'excerpt' => 'Saints launch football development program for local youth.',
                'content' => 'Buhimba United Saints is proud to launch our community outreach program aimed at developing young football talent in the local area. The program will provide free coaching and equipment to underprivileged children.',
                'author_id' => $media ? $media->id : 1,
                'is_published' => true,
                'is_featured' => true,
                'category' => 'Community',
                'tags' => 'community,youth,development',
                'published_at' => now()->subDays(3),
                'views' => 134,
            ],
            [
                'title' => 'Season Ticket Sales Now Open',
                'slug' => 'season-ticket-sales-now-open',
                'excerpt' => 'Get your season tickets for the upcoming UPL campaign.',
                'content' => 'Season ticket sales for the 2025-26 Uganda Premier League season are now open. Early bird discounts available for the first 100 supporters. Support the Saints throughout the season!',
                'author_id' => $admin ? $admin->id : 1,
                'is_published' => false,
                'is_featured' => false,
                'category' => 'Tickets',
                'tags' => 'tickets,season,supporters',
                'published_at' => null,
                'views' => 23,
            ],
        ];

        foreach ($newsArticles as $article) {
            News::create($article);
        }

        $this->command->info('News articles seeded successfully!');
    }
}
