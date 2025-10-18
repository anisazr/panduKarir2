<?php

use Illuminate\Support\Facades\Route;

// Halaman utama PanduKarir
Route::get('/', function () {
    return view('home');
})->name('home');

// About Us
Route::get('/about', function () {
    return view('about');
})->name('about');

// Programs
Route::get('/programs', function () {
    return view('programs');
})->name('programs');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Team (kalau kamu ingin team juga bisa diakses dari navbar)
Route::get('/team', function () {
    return view('team');
})->name('team');

// Bootcamp (jika dari layout TechBootcamp)
Route::get('/bootcamp', function () {
    return view('bootcamp');
})->name('bootcamp');
