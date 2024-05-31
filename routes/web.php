<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth Route
Auth::routes();
Route::get('berlangganan', [CustomerController::class, 'index'])->name('pricing');

// Guest Route
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('beranda');
});

// User Route
Route::middleware('auth')->group(function () {
    Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/cari-kerja', [JobsController::class, 'index'])->name('kerja');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
