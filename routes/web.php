<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('forgot-password.post');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home', ['user' => Auth::user()]);
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::resource('posts', PostController::class)->only(['store', 'destroy']);

    Route::get('/clear-cache', function () {
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return "All caches have been cleared!";
    });
});
