<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    public function run(): void
    {
        $place = Place::create([
            'name' => 'Universidad Francisco Marroquín',
            'slug' => 'ufm',
            'logo' => 'https://madrid.ufm.edu/wp-content/uploads/2021/11/ufm-madrid-negro-300x241-1.png',
            'address' => 'Arturo Soria, 245',
            'city' => 'Madrid',
            'postcode' => '28033',
            'country' => 'España',
            'website' => 'https://madrid.ufm.edu/',
            'phone' => '+34 910 66 81 53',
            'email' => 'admisionesmadrid@ufm.edu',
        ]);
        
        $socialProfiles = [
            ['socialnetwork' => 'twitter', 'url' => 'https://twitter.com/en_ufmmadrid'],
            ['socialnetwork' => 'instagram', 'url' => 'https://www.instagram.com/ufmmadrid/'],
            ['socialnetwork' => 'linkedin', 'url' => 'https://www.linkedin.com/school/campus-ufm-madrid/'],
            ['socialnetwork' => 'youtube', 'url' => 'https://www.youtube.com/channel/UC4OX8cK9N-o_zk28AJjw7ZQ'],
            ['socialnetwork' => 'facebook', 'url' => 'https://www.facebook.com/ufmmadrid/'],
        ];
        
        foreach ($socialProfiles as $profile) {
            $place->socialProfiles()->create($profile);
        }
    }
}
