<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->group(function() {
    Route::get('/greet', 'greet');
    Route::get('/attendance', 'attendance');
    
    // Route parameters
    Route::get('/profile/{name?}', 'profile')->whereAlpha('name')->name('student.profile');
});