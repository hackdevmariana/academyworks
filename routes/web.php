<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController; 
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('lang/{locale}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
