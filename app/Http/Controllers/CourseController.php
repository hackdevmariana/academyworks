<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Mostrar listado de cursos en español
    public function indexSpanish()
    {
        $courses = Course::where('language', 'es')->get();
        return view('courses.index', ['courses' => $courses, 'language' => 'es']);
    }

    // Mostrar listado de cursos en inglés
    public function indexEnglish()
    {
        $courses = Course::where('language', 'en')->get();
        return view('courses.index', ['courses' => $courses, 'language' => 'en']);
    }

    // Mostrar un curso específico
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('courses.show', ['course' => $course]);
    }
}
