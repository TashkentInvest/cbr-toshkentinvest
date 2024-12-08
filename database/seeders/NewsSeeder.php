<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => '«TASHKENT INVEST» во главе стратегии городского развития',
            'image' => 'https://static.tildacdn.com/tild3065-6139-4836-b865-376162366533/__2024-05-15__23425A.png',
            'content' => 'Full content for the news post here.',
            'link' => 'https://toshkentinvest.uz/tpost/hy1cya0s11-tashkent-invest-vo-glave-strategii-gorod',
            'published_at' => now(),
        ]);

        News::create([
            'title' => 'Ташкент в топ-50 городов мира',
            'image' => 'https://static.tildacdn.com/tild3034-3663-4534-b032-356432373931/Tashkent-City_name_s.jpg',
            'content' => 'Full content for the news post here.',
            'link' => 'https://toshkentinvest.uz/tpost/552dltdp01-tashkent-v-top-50-gorodov-mira',
            'published_at' => now()->subDays(2),
        ]);
    }
}
