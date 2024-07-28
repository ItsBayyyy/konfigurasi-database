<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login'); 
})->name('logout');

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/products', \App\Http\Controllers\ProductController::class);