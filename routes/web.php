<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home Route
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');;
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');