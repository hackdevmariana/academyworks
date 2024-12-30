<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Copy;

class CopySeeder extends Seeder
{
    public function run(): void
    {
        Copy::create([
            'type' => 'copyleft',
            'name' => 'Hack de Mariana',
            'url' => 'https://github.com/hackdevmariana/',
            'text' => 'No rights reserved.',
            'language' => 'en',
        ]);

        Copy::create([
            'type' => 'copyleft',
            'name' => 'Hack de Mariana',
            'url' => 'https://github.com/hackdevmariana/',
            'text' => 'Ningún derecho reservado.',
            'language' => 'es',
        ]);
    }
}
