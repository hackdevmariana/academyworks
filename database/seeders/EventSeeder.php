<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([
            'title' => 'PHP Hackathon',
            'slug' => 'php-hackathon',
            'subtitle' => 'PHP project development hackathon',
            'abstract' => null,
            'description' => null,
            'image' => null,
            'image_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/hackathon.jpeg',
            'banner' => null,
            'banner_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/php-hackathon_banner.png',
            'place' => 'ufm',
            'start_date' => '2026-05-03',
            'start_time' => '10:00:00',
            'end_date' => '2026-05-05',
            'end_time' => '22:00:00',
            'language' => 'en',
        ]);
    }
}
