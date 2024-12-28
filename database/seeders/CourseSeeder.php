<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'PHP Bootcamp',
                'slug' => 'php-bootcamp',
                'subtitle' => 'Learn PHP from the basics to the frameworks',
                'abstract' => "In this bootcamp you will learn to program in the PHP language, to integrate it with HTML and CSS.\n\nOnce the foundations are laid, we will move on to use different frameworks focusing on Laravel.",
                'description' => null,
                'image' => null,
                'image_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/course.jpeg',
                'banner' => null,
                'banner_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/course.jpeg',
                'duration' => '500 hours',
                'level' => 'Beginner',
                'language' => 'en',
            ],
            [
                'title' => 'Bootcamp de PHP',
                'slug' => 'bootcamp-php',
                'subtitle' => 'Aprende PHP desde las bases a los frameworks',
                'abstract' => "En este bootcamp aprenderás a programar en el lenguaje PHP, a integrarlo con HTML y CSS.\n\nUna vez sentadas las bases, pasaremos a usar distintos frameworks centrándonos en Laravel.",
                'description' => null,
                'image' => null,
                'image_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/course.jpeg',
                'banner' => null,
                'banner_url' => 'https://raw.githubusercontent.com/hackdevmariana/works-images/refs/heads/master/course.jpeg',
                'duration' => '500 horas',
                'level' => 'Principiante',
                'language' => 'es',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
