<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\LessonController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('lang/{locale}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
Route::get('/readings/{slug}', [ReadingController::class, 'show'])->name('readings.show');
Route::get('/speakers', [SpeakerController::class, 'index'])->name('speakers.index');
Route::get('/speakers/{id}', [SpeakerController::class, 'show'])->name('speakers.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/student/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/student/update', [StudentController::class, 'update'])->name('student.update');
});

// Listado de cursos en español
Route::get('/cursos', [CourseController::class, 'indexSpanish'])->name('courses.spanish');

// Listado de cursos en inglés
Route::get('/courses', [CourseController::class, 'indexEnglish'])->name('courses.english');

// Detalle del curso (español o inglés según la ruta)
Route::get('/curso/{slug}', [CourseController::class, 'show'])->name('course.show.spanish');
Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.show.english');

Route::get('course/{slug}/modules', [ModuleController::class, 'show'])->name('module.index');
Route::get('course/{slug}/module/{module:slug}', [ModuleController::class, 'show'])->name('module.show');
Route::get('course/{slug}/module/{module:slug}/lessons', [LessonController::class, 'show'])->name('lesson.index');
Route::get('course/{slug}/module/{module:slug}/lesson/{lesson:slug}', [LessonController::class, 'show'])->name('lesson.show');
