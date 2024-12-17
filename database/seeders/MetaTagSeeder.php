<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagSeeder extends Seeder
{
    public function run(): void
    {
        MetaTag::create([
            'route_name' => 'home', // Identificador único para la ruta
            'title' => 'Academy Works - Home',
            'charset' => 'utf-8',
            'lang' => 'en',
            'canonical' => url('/'),
            'meta_description' => 'Academy Works: The best platform for education and collaboration.',
            'meta_keywords' => 'academy, education, collaboration, learning',
            'author' => 'Academy Works',
            'robots' => 'index, follow',
            'referrer' => 'origin',
            'og_title' => 'Academy Works - Home',
            'og_description' => 'Join Academy Works to explore innovative educational tools and resources.',
            'og_image' => asset('images/og-image.jpg'), // Cambia por la URL real de la imagen
            'og_type' => 'website',
            'og_url' => url('/'),
            'og_site_name' => 'Academy Works',
            'og_locale' => 'en_US',
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'Academy Works - Home',
            'twitter_description' => 'Discover Academy Works: Your gateway to learning and collaboration.',
            'twitter_image' => asset('images/twitter-image.jpg'), // Cambia por la URL real de la imagen
            'twitter_site' => '@AcademyWorks',
            'twitter_creator' => '@AcademyWorks',
            'schema_name' => 'Academy Works',
            'schema_description' => 'Academy Works provides a collaborative platform for education.',
            'schema_image' => asset('images/schema-image.jpg'), // Cambia por la URL real de la imagen
        ]);
    }
}
