<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logo;

class LogoSeeder extends Seeder
{
    public function run(): void
    {
        Logo::create([
            'name' => 'Principal Logo',
            'slug' => 'principal-log',
            'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/logo.png',
            'image' => null,
        ]);
    }
}
