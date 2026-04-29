<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

//for email 
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class,'send']);

Route::get('/about', function () {
    return view('about');
})->name('about');

// Authentication Views (UI Only)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Anatomy Learning Module
Route::get('/anatomy', function () {
    return view('anatomy');
})->name('anatomy.explorer');

// User Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// User Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Quiz Interface
Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');

//session

// Route::get(
//     '/session', function(){
//         return [
//             'using-put' => $request->session()->put('course',[]),
//             'using-put-mutiple' => request->session()->push('course','PHP')  
//         ];
//     }
// );