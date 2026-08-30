<?php

use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;

Route::get('/', function () {
    return view('welcome');
});

// Teacher Routes
Route::resource('teachers', TeacherController::class);

// Student Routes
Route::resource('students', StudentController::class);

// SchoolClass Routes
Route::resource('classes', SchoolClassController::class);

// Major Routes
Route::resource('majors', MajorController::class);