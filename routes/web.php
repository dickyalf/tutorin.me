<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landing');
})->name('homepage');
Route::get('/welcome', function (){
    return view('welcome');
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');


Route::get('/success-book', function () {
    return view('successbook');
})->name('success-book');

Route::get('/invoice-view', function () {
    return view('invoice');
})->name('invoice-view');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-action', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-action', [AuthController::class, 'registerAction'])->name('register.action');

// Auth::routes();

Route::get('/student-view', function(){
    return view('student-view');
})->name('student-view');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
