<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;


// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');