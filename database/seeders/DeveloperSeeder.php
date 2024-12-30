<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Developer;


class DeveloperSeeder extends Seeder
{
    public function run()
    {
        Developer::create([
            'name' => 'Hack de Mariana',
            'url' => 'https://github.com/hackdevmariana/',
        ]);
    }
}