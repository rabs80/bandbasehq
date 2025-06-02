<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Public Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Contact form handler
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Auth Routes (only if you haven’t already)
use Illuminate\Support\Facades\Auth;
Auth::routes(); // This enables register, login, etc.

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
