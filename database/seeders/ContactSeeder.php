<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'name' => 'Contact information',
            'slug' => 'contact-information',
            'text' => 'Contact information',
            'url' => '/contact',
            'email' => 'info@example.com',
        ]);
    }
}
