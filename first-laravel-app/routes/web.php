<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->group(function() {
    Route::get('/greet', 'greet');
    Route::get('/attendance', 'attendance');
    
    // Route parameters
    Route::get('/profile/{name?}', 'profile')->whereAlpha('name')->name('student.profile');
});

Route::resource('students', StudentController::class);

Route::resource('courses', CourseController::class);