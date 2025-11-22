<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CourseCategoryController;

// ===========================
// HALAMAN STATIS
// ===========================
Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/team', fn() => view('team'))->name('team');
Route::get('/bootcamp', fn() => view('bootcamp'))->name('bootcamp');

// ===========================
// COURSE CATEGORY (MANUAL)
// ===========================
Route::prefix('course-category')->group(function () {
    Route::get('/', [CourseCategoryController::class, 'index'])->name('coursekat.index');

    Route::get('/add', [CourseCategoryController::class, 'create'])->name('coursekat.add');
    Route::post('/store', [CourseCategoryController::class, 'store'])->name('coursekat.store');

    Route::get('/edit/{id}', [CourseCategoryController::class, 'edit'])->name('coursekat.edit');
    Route::post('/update/{id}', [CourseCategoryController::class, 'update'])->name('coursekat.update');

    Route::get('/delete/{id}', [CourseCategoryController::class, 'destroy'])->name('coursekat.delete');
});

// ===========================
// COURSES
// ===========================
Route::resource('courses', CourseController::class);

// ===========================
// MESSAGES
// ===========================
Route::resource('messages', MessageController::class);
