<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\Lesson;
use Illuminate\Support\Str;

class BootcampPhpSeeder extends Seeder
{
    public function run()
    {
        // Define modules and their lessons
        $modules = [
            [
                'title' => 'Introduction to PHP',
                'description' => 'Learn the basics of PHP, its syntax, and how to set up your environment.',
                'order' => 1,
                'lessons' => [
                    [
                        'title' => 'What is PHP?',
                        'video_url' => 'https://www.example.com/video/what-is-php',
                        'content' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
                        'order' => 1
                    ],
                    [
                        'title' => 'Setting Up Your Environment',
                        'video_url' => 'https://www.example.com/video/setup-environment',
                        'content' => 'In this lesson, we will set up a PHP environment using XAMPP or a similar tool.',
                        'order' => 2
                    ]
                ]
            ],
            [
                'title' => 'PHP Basics',
                'description' => 'Understand variables, data types, and basic operators in PHP.',
                'order' => 2,
                'lessons' => [
                    [
                        'title' => 'Variables and Data Types',
                        'video_url' => 'https://www.example.com/video/variables-data-types',
                        'content' => 'Learn about PHP variables, how to declare them, and the different data types.',
                        'order' => 1
                    ],
                    [
                        'title' => 'Basic Operators',
                        'video_url' => 'https://www.example.com/video/basic-operators',
                        'content' => 'Understand how to use arithmetic, comparison, and logical operators in PHP.',
                        'order' => 2
                    ]
                ]
            ],
            [
                'title' => 'Control Structures',
                'description' => 'Learn about conditional statements and loops in PHP.',
                'order' => 3,
                'lessons' => [
                    [
                        'title' => 'Conditional Statements',
                        'video_url' => 'https://www.example.com/video/conditional-statements',
                        'content' => 'Use if, else, and switch statements to control the flow of your PHP code.',
                        'order' => 1
                    ],
                    [
                        'title' => 'Loops',
                        'video_url' => 'https://www.example.com/video/loops',
                        'content' => 'Learn about for, while, and foreach loops to iterate over data.',
                        'order' => 2
                    ]
                ]
            ],
            [
                'title' => 'Working with Functions',
                'description' => 'Understand how to define and use functions in PHP.',
                'order' => 4,
                'lessons' => [
                    [
                        'title' => 'Defining Functions',
                        'video_url' => 'https://www.example.com/video/defining-functions',
                        'content' => 'Learn how to define reusable functions in PHP.',
                        'order' => 1
                    ],
                    [
                        'title' => 'Built-in Functions',
                        'video_url' => 'https://www.example.com/video/built-in-functions',
                        'content' => 'Explore some of the most commonly used built-in PHP functions.',
                        'order' => 2
                    ]
                ]
            ]
        ];

        // Insert modules and lessons into the database
        foreach ($modules as $moduleData) {
            $module = Module::create([
                'course_id' => 1,
                'title' => $moduleData['title'],
                'slug' => Str::slug($moduleData['title']),
                'description' => $moduleData['description'],
                'order' => $moduleData['order']
            ]);

            foreach ($moduleData['lessons'] as $lessonData) {
                Lesson::create([
                    'module_id' => $module->id,
                    'title' => $lessonData['title'],
                    'slug' => Str::slug($lessonData['title']),
                    'video_url' => $lessonData['video_url'],
                    'content' => $lessonData['content'],
                    'order' => $lessonData['order']
                ]);
            }
        }
    }
}
