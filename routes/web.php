<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services pages
Route::get('/services', function () {
    return view('services');
})->name('services');

// Individual service pages
Route::get('/services/transport-trucks', function () {
    return view('services.transport-trucks');
})->name('services.transport-trucks');

Route::get('/services/car-rentals', function () {
    return view('services.car-rentals');
})->name('services.car-rentals');

Route::get('/services/tour-packages', function () {
    return view('services.tour-packages');
})->name('services.tour-packages');

Route::get('/services/logistics', function () {
    return view('services.logistics');
})->name('services.logistics');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Dashboard (authenticated + verified)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile management under auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
