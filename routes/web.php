<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/practice', function () {
    return view('practice');
})->name('practice.index');

Route::get('/attorney', function () {
    return view('attorney');
})->name('attorney.index');

Route::get('/case-study', function () {
    return view('case_study');
})->name('cases.index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery.index');

Route::get('/faq', function () {
    return view('faq');
})->name('faq.index');

Route::get('/testimonials', function () {
    return view('testimonial');
})->name('testimonial.index');

Route::get('/practices', function () {
    return view('single_practice');
})->name('practices.show');

Route::get('/attorneys', function () {
    return view('single_attorney');
})->name('attorneys.show');

Route::get('/cases', function () {
    return view('single_case_study');
})->name('cases.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
