<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Show all modules for a given course.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $modules = $course->modules()->orderBy('order')->get();

        return view('modules.index', compact('course', 'modules'));
    }

    /**
     * Show a specific module for a given course.
     *
     * @param string $slug
     * @param string $moduleSlug
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $moduleSlug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $module = Module::where('slug', $moduleSlug)->where('course_id', $course->id)->firstOrFail();

        return view('modules.show', compact('course', 'module'));
    }
}
