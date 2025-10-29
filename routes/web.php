<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
})->name('dashboard');

// redirect to homepage or login page
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); 
})->name('logout');

Route::resource('sections', SectionController::class);
Route::resource('students', StudentController::class);
