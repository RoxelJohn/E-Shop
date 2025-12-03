<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Show Login Page
Route::get('/login', function () {
    return view('login'); // your login.blade.php path
})->name('login');

// Show Register Page
Route::get('/register', function () {
    return view('register'); // change if needed
})->name('register');

// Forgot Password Page (optional for now)
Route::get('/forgot-password', function () {
    return 'Forgot Password Page coming soon';
})->name('password.request');

