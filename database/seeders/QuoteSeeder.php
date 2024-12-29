<?php

namespace Database\Seeders;

use App\Models\Quote;
use App\Models\QuoteAuthor;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    public function run(): void
    {
        $authors = QuoteAuthor::all();

        $quotes = [
            [
                'quote' => 'Life is what happens when you’re busy making other plans.',
                'slug' => 'life-is-what-happens',
                'language' => 'en',
                'quote_author_id' => $authors->where('slug', 'john-doe')->first()->id,
            ],
            [
                'quote' => 'La vida es lo que pasa mientras haces otros planes.',
                'slug' => 'la-vida-es-lo-que-pasa',
                'language' => 'es',
                'quote_author_id' => $authors->where('slug', 'john-doe')->first()->id,
            ],
            [
                'quote' => 'Be yourself; everyone else is already taken.',
                'slug' => 'be-yourself',
                'language' => 'en',
                'quote_author_id' => $authors->where('slug', 'jane-doe')->first()->id,
            ],
            [
                'quote' => 'Sé tú mismo; todos los demás ya están ocupados.',
                'slug' => 'se-tu-mismo',
                'language' => 'es',
                'quote_author_id' => $authors->where('slug', 'jane-doe')->first()->id,
            ],
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
    }
}
