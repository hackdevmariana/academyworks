<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Crear el menú principal
        $mainMenu = Menu::create([
            'name' => 'Main Menu',
            'slug' => 'main-menu',
        ]);

        // Crear elemento "Courses" y sus subelementos
        $coursesItem = MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Courses',
            'slug' => 'courses',
            'url' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $coursesItem->id,
            'title' => 'PHP Bootcamp',
            'slug' => 'php-bootcamp',
            'url' => '/courses/php-bootcamp',
            'order' => 1,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $coursesItem->id,
            'title' => 'Python Bootcamp',
            'slug' => 'python-bootcamp',
            'url' => '/courses/python-bootcamp',
            'order' => 2,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $coursesItem->id,
            'title' => 'Introduction to Python',
            'slug' => 'introduction-to-python',
            'url' => '/courses/introduction-to-python',
            'order' => 3,
            'is_active' => true,
        ]);

        // Crear elemento "Students" y su subelemento
        $studentsItem = MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Students',
            'slug' => 'students',
            'url' => null,
            'order' => 2,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $studentsItem->id,
            'title' => 'Top students',
            'slug' => 'top-students',
            'url' => '/students/top',
            'order' => 1,
            'is_active' => true,
        ]);

        // Crear elemento "Speakers"
        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Speakers',
            'slug' => 'speakers',
            'url' => '/speakers',
            'order' => 3,
            'is_active' => true,
        ]);

        // Crear elemento "Documentation" y sus subelementos
        $documentationItem = MenuItem::create([
            'menu_id' => $mainMenu->id,
            'title' => 'Documentation',
            'slug' => 'documentation',
            'url' => null,
            'order' => 4,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $documentationItem->id,
            'title' => 'PHP Tutorials',
            'slug' => 'php-tutorials',
            'url' => '/documentation/php-tutorials',
            'order' => 1,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $documentationItem->id,
            'title' => 'Python Tutorials',
            'slug' => 'python-tutorials',
            'url' => '/documentation/python-tutorials',
            'order' => 2,
            'is_active' => true,
        ]);

        MenuItem::create([
            'menu_id' => $mainMenu->id,
            'parent_id' => $documentationItem->id,
            'title' => 'Student Work',
            'slug' => 'student-work',
            'url' => '/documentation/student-work',
            'order' => 3,
            'is_active' => true,
        ]);

        // Mensaje de éxito en consola
        $this->command->info('Menu and MenuItems seeded successfully!');
    }
}
