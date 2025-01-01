<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('lang/{locale}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
