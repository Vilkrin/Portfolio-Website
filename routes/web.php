<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('projects', 'projects')->name('projects');

Route::view('contact', 'contact')->name('contact');

Route::view('education', 'education')->name('education');

Route::view('experience', 'experience')->name('experience');

Route::view('skills', 'skills')->name('skills');


// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
// });

// require __DIR__ . '/settings.php';
