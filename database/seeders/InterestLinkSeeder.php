<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InterestLink;

class InterestLinkSeeder extends Seeder
{
    public function run()
    {
        $links = [
            ['text' => 'PHP', 'url' => 'https://www.php.net/', 'language' => 'en'],
            ['text' => 'Laravel', 'url' => 'https://laravel.com/', 'language' => 'en'],
            ['text' => 'Laravel News', 'url' => 'https://laravel-news.com/blog', 'language' => 'en'],
            ['text' => 'Laravel', 'url' => 'https://documentacionlaravel.com/', 'language' => 'es'],
            ['text' => 'Laravel Tip', 'url' => 'https://www.laraveltip.com/', 'language' => 'es'],
            ['text' => 'Café del programador', 'url' => 'https://cafedelprogramador.com/blog/', 'language' => 'es'],
        ];

        foreach ($links as $link) {
            InterestLink::create($link);
        }
    }
}
