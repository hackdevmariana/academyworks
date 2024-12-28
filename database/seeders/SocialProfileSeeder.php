<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialProfile;

class SocialProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $socialProfiles = [
            ['socialnetwork' => 'twitter', 'url' => 'https://x.com/myprofile', 'text' => 'My X profile'],
            ['socialnetwork' => 'instagram', 'url' => 'https://instagram.com/myprofile', 'text' => 'My instagram profile'],
            ['socialnetwork' => 'linkedin', 'url' => 'https://linkedin.com/in/my-profile-243361', 'text' => 'My linkedin profile'],
            ['socialnetwork' => 'youtube', 'url' => 'https://youtube.com/@mychannel', 'text' => 'My Youtube channel'],
        ];

        foreach ($socialProfiles as $profile) {
            SocialProfile::create($profile);
        }
    }
}
