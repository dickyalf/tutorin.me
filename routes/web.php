<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

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