<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomAuthController;

//untuk halaman index
Route::get('/', function () {
    return view('index');
})->name('home');

//untuk login register logout
Route::get('/login', [CustomAuthController::class, 'loginForm'])->name('login');
Route::post('/login', [CustomAuthController::class, 'login']);

Route::get('/register', [CustomAuthController::class, 'registerForm'])->name('register');
Route::post('/register', [CustomAuthController::class, 'register']);

Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');


//require __DIR__.'/auth.php';
