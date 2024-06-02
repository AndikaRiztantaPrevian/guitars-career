<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobVacancy;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth Route
Auth::routes();
// OAuth
Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('oauth.redirect');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);
Route::get('/berlangganan', [CustomerController::class, 'index'])->name('pricing');

// Guest Route
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('beranda');
});

// User Route
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/beranda', [HomeController::class, 'index'])->name('home');
    Route::get('/cari-kerja', [JobsController::class, 'index'])->name('kerja');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/buat-lowongan', [JobVacancy::class, 'index'])->name('buat-lowongan');
    Route::get('/set-account/only/{id}', [SocialiteController::class, 'indexRole'])->name('role-only-index');
    Route::post('/set-account/only/post/{id}', [SocialiteController::class, 'postRole'])->name('role-only-post');
    Route::get('/set-account/{id}', [SocialiteController::class, 'indexRolePassword'])->name('role-index');
    Route::post('/set-account/post/{id}', [SocialiteController::class, 'postRolePassword'])->name('role-post');
});

// Dev route biar cepet login pake user dengan id 1
Route::get('/admin', function () {
    Auth::loginUsingId(1);
    return redirect()->route('beranda');
});
