<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\StudentController;

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
