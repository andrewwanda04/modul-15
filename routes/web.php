<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', [HomeController::class, 'index'])->name('home');


Route::get('profile', ProfileController::class)->name('profile');


Route::resource('employees', EmployeeController::class);

// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk halaman register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route untuk halaman verifikasi
Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');
