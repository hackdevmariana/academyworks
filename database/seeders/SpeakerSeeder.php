<?php

namespace Database\Seeders;

use App\Models\Speaker;
use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    public function run()
    {
        Speaker::create([
            'name' => 'John',
            'surname' => 'Doe',
            'biography' => 'An experienced PHP developer with over 10 years in the industry.',
            'photo_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/author.jpg',
        ]);

        Speaker::create([
            'name' => 'Jane',
            'surname' => 'Smith',
            'biography' => 'A PHP instructor passionate about teaching and community building.',
            'photo_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/female_author.png',
        ]);
    }
}
