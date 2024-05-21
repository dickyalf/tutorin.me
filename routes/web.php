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
    return view('mentor/profile');
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

Route::get('/mentor-view', function(){
    return view('mentor/mentor-view');
})->name('mentor-view');

Route::get('/mentor-schedule', function(){
    return view('mentor/mentor-schedule');
})->name('mentor-schedule');

Route::get('/mentor-invoice', function(){
    return view('mentor/mentor-invoice');
})->name('mentor-invoice');

Route::get('/mentor-booking', function(){
    return view('mentor/mentor-booking');
})->name('mentor-booking');

Route::get('/mentor-review', function(){
    return view('mentor/mentor-review');
})->name('mentor-review');

Route::get('/mentor-message', function(){
    return view('mentor/mentor-message');
})->name('mentor-message');

Route::get('/mentor-appointments', function(){
    return view('mentor/mentor-appointments');
})->name('mentor-appointments');

Route::get('/student-profile', function(){
    return view('student/student-profile');
})->name('student-profile');

Route::get('/student-view', function(){
    return view('student/student-view');
})->name('student-view');

Route::get('/student-booking', function(){
    return view('student/student-booking');
})->name('student-booking');

Route::get('/student-message', function(){
    return view('student/student-message');
})->name('student-message');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
