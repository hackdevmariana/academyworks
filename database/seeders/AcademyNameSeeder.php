<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AcademyName;

class AcademyNameSeeder extends Seeder
{
    public function run(): void
    {
        AcademyName::create([
            'name' => 'Academy Works',
            'url' => 'https://github.com/hackdevmariana/academyworks',
        ]);
    }
}
