<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sini kamu bisa mendaftarkan semua route untuk aplikasi web.
| Route akan otomatis dimuat oleh RouteServiceProvider.
*/

// Landing page
Route::get('/', function () {
    return view('index'); // halaman utama
});

// ----------------------
// Auth routes
// ----------------------

// Login
Route::get('/login', function () {
    return view('auth.login'); // form login
});
Route::post('/login', [AuthController::class, 'login']); // proses login

// Signup (registrasi)
Route::get('/signup', function () {
    return view('auth.signup'); // form signup
});
Route::post('/signup', [AuthController::class, 'signup']); // proses signup

// Logout
Route::get('/logout', [AuthController::class, 'signout'])
    ->name('logout'); // route logout dengan nama 'logout'

// ----------------------
// Dashboard
// ----------------------
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('authcheck'); // hanya bisa diakses jika sudah login
