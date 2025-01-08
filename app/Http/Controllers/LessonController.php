<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Show all lessons for a specific module in a course.
     *
     * @param string $slug
     * @param string $moduleSlug
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $moduleSlug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $module = Module::where('slug', $moduleSlug)->where('course_id', $course->id)->firstOrFail();
        $lessons = $module->lessons()->orderBy('order')->get();

        return view('lessons.index', compact('course', 'module', 'lessons'));
    }

    /**
     * Show a specific lesson in a module and course.
     *
     * @param string $slug
     * @param string $moduleSlug
     * @param string $lessonSlug
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $moduleSlug, $lessonSlug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $module = Module::where('slug', $moduleSlug)->where('course_id', $course->id)->firstOrFail();
        $lesson = Lesson::where('slug', $lessonSlug)->where('module_id', $module->id)->firstOrFail();

        return view('lessons.show', compact('course', 'module', 'lesson'));
    }
}