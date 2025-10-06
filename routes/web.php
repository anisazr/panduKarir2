<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/bootcamp', function () {
    return view('bootcamp');
})->name('bootcamp');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/our-team', function () {
    return view('team');
})->name('team');

Route::get('/about', function () {
    return view('about');
})->name('about');
