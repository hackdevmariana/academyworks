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

    public function index()
    {
        // Obtén todos los cursos
        $courses = \App\Models\Course::all();

        // Devuelve la vista con los cursos
        return view('courses.index', compact('courses'));
    }

    // Mostrar un curso específico
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('courses.show', ['course' => $course]);
    }

    public function enroll(Course $course)
    {
        $user = auth()->user();

        // Verifica si ya está inscrito
        if ($course->students()->where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('status', translate('already_enrolled'));
        }

        // Inscribe al estudiante
        $course->students()->attach($user->id);

        return redirect()->back()->with('status', translate('enrollment_successful'));
    }

}
