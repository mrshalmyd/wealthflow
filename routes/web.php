<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Landing page
Route::get('/', function () {
    return view('index');
});

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', function () {
    return view('auth.signup');
});
Route::post('/signup', [AuthController::class, 'signup']);

// Logout 
Route::get('/logout', [AuthController::class, 'signout'])->name('logout');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('authcheck');
