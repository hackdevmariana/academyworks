<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LanguageController,
    HomeController,
    EventController,
    SpeakerController,
    StudentController,
    CourseController,
    ModuleController,
    LessonController,
    MessageController,
    ReadingController,
    AuthorController
};

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Cambio de idioma
Route::get('lang/{locale}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

// Eventos
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');

// Speakers
Route::prefix('speakers')->name('speakers.')->group(function () {
    Route::get('/', [SpeakerController::class, 'index'])->name('index');
    Route::get('/{id}', [SpeakerController::class, 'show'])->name('show');
});

// Contacto
Route::get('/contact', [MessageController::class, 'create'])->name('messages.create');
Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');

// Autenticación y dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rutas autenticadas
Route::middleware(['auth'])->group(function () {
    // Estudiantes
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/edit', [StudentController::class, 'edit'])->name('edit');
        Route::post('/update', [StudentController::class, 'update'])->name('update');
    });
});

// Cursos
Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index'); // Nueva ruta
    Route::get('/spanish', [CourseController::class, 'indexSpanish'])->name('spanish');
    Route::get('/english', [CourseController::class, 'indexEnglish'])->name('english');
    Route::get('/{slug}', [CourseController::class, 'show'])->name('show');
    Route::prefix('{slug}/modules')->name('modules.')->group(function () {
        Route::get('/', [ModuleController::class, 'index'])->name('index');
        Route::get('/{module:slug}', [ModuleController::class, 'show'])->name('show');
        Route::get('/{module:slug}/lessons', [LessonController::class, 'index'])->name('lessons.index');
        Route::get('/{module:slug}/lesson/{lesson:slug}', [LessonController::class, 'show'])->name('lessons.show');
    });
});


// Lecturas
Route::prefix('readings')->name('readings.')->group(function () {
    Route::get('/', [ReadingController::class, 'index'])->name('index');
    Route::get('/{slug}', [ReadingController::class, 'show'])->name('show');
    Route::get('/{slug}/part/{partSlug}', [ReadingController::class, 'showPart'])->name('part.show');
});

// Autores
Route::get('/authors/{slug}', [AuthorController::class, 'show'])->name('authors.show');
