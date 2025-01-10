<?php

namespace Database\Seeders;

use App\Models\Reading;
use App\Models\ReadingPart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReadingSeeder extends Seeder
{
    public function run()
    {
        // Crear lecturas
        $readings = [
            [
                'title' => 'The Art of PHP',
                'subtitle' => 'Mastering Web Development',
                'slug' => Str::slug('The Art of PHP'),
                'description' => 'An insightful book on PHP development.',
                'author_id' => 1, // Suponiendo que existe un autor con ID 1
            ],
            [
                'title' => 'Laravel for Beginners',
                'subtitle' => 'Start Your Journey',
                'slug' => Str::slug('Laravel for Beginners'),
                'description' => 'A beginner-friendly guide to Laravel.',
                'author_id' => 2, // Suponiendo que existe un autor con ID 2
            ],
        ];

        foreach ($readings as $readingData) {
            $reading = Reading::create($readingData);

            // Crear partes de la lectura
            for ($i = 1; $i <= 3; $i++) {
                ReadingPart::create([
                    'reading_id' => $reading->id,
                    'slug' => Str::slug("{$reading->slug}-part-{$i}"),
                    'part_number' => $i,
                    'title' => "Part {$i}: Insights on {$reading->title}",
                    'content' => "Content for part {$i} of '{$reading->title}'.",
                ]);
            }
        }
    }
}
