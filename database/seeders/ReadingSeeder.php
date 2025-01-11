<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Reading;
use App\Models\ReadingPart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReadingSeeder extends Seeder
{
    public function run()
    {
        // Crear autores
        $authors = [
            [
                'name' => 'Manuel',
                'surname' => 'García',
                'slug' => Str::slug('Manuel García'),
                'biography' => 'Pepe García is an experienced author specializing in web development.',
            ],
            [
                'name' => 'Ana',
                'surname' => 'Pérez',
                'slug' => Str::slug('Ana Pérez'),
                'biography' => 'Eva Pérez is a renowned writer in the PHP community.',
            ],
        ];

        foreach ($authors as $authorData) {
            $author = Author::create($authorData);

            // Crear lecturas asociadas al autor
            $readings = [
                [
                    'title' => 'The Art of PHP',
                    'subtitle' => 'Mastering Web Development',
                    'description' => 'An insightful book on PHP development.',
                ],
                [
                    'title' => 'Laravel for Beginners',
                    'subtitle' => 'Start Your Journey',
                    'description' => 'A beginner-friendly guide to Laravel.',
                ],
            ];

            foreach ($readings as $readingData) {
                // Generar un slug único utilizando el ID del autor
                $slug = Str::slug($readingData['title']) . '-' . $author->id;

                $reading = $author->readings()->create([
                    'title' => $readingData['title'],
                    'subtitle' => $readingData['subtitle'],
                    'slug' => $slug,
                    'description' => $readingData['description'],
                ]);

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
}
