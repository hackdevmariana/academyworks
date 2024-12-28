<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        $heroes = [
            [
                'text' => 'Welcome to Academy Works',
                'subtext' => 'Free training platform based on Laravel',
                'button_link_1' => '#',
                'button_text_1' => 'Learn more',
                'button_link_2' => '/contact',
                'button_text_2' => 'Contact us',
                'language' => 'en',
                'is_active' => true,
                'image' => null,
                'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/hero-academy-1.jpeg',
            ],
            [
                'text' => 'Academy Works',
                'subtext' => 'Free software for a free society',
                'button_link_1' => '#',
                'button_text_1' => 'Learn more',
                'button_link_2' => '/contact',
                'button_text_2' => 'Contact us',
                'language' => 'en',
                'is_active' => true,
                'image' => null,
                'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/hero-academy-2.jpeg',
            ],
            [
                'text' => 'Bienvenidos a Academy Works',
                'subtext' => 'Plataforma libre basada en Laravel',
                'button_link_1' => '#',
                'button_text_1' => 'Apender más',
                'button_link_2' => '/contacto',
                'button_text_2' => 'Escríbenos',
                'language' => 'es',
                'is_active' => true,
                'image' => null,
                'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/hero-academy-1.jpeg',
            ],
            [
                'text' => 'Academy Works',
                'subtext' => 'Software Libre para una sociedad libre',
                'button_link_1' => '#',
                'button_text_1' => 'Leer más',
                'button_link_2' => '/contacto',
                'button_text_2' => 'Escríbenos',
                'language' => 'es',
                'is_active' => true,
                'image' => null,
                'url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/hero-academy-2.jpeg',
            ],
        ];

        foreach ($heroes as $hero) {
            Hero::create($hero);
        }
    }
}
