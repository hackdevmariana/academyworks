<?php

namespace Database\Seeders;

use App\Models\QuoteAuthor;
use Illuminate\Database\Seeder;

class QuoteAuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'John',
                'surname' => 'Doe',
                'slug' => 'john-doe',
                'image' => null,
                'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/author.jpg',
            ],
            [
                'name' => 'Jane',
                'surname' => 'Doe',
                'slug' => 'jane-doe',
                'image' => null,
                'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/female_author.jpeg',
            ],
        ];

        foreach ($authors as $author) {
            QuoteAuthor::create($author);
        }
    }
}
