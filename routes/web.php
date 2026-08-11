<?php

use Illuminate\Support\Facades\Route;

//Import Controller
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;

use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;



Route::get('/', function () {
    return view('welcome');
});

//Teacher Routes
Route::prefix('teachers')->name('teachers.')->group(function () {

    Route::get('/', [TeacherController::class,'index'])->name('index');

    Route::get('/create',[TeacherController::class,'create'])->name('create');

    Route::post('/',[TeacherController::class,'store'])->name('store');

    Route::get('/{id}',[TeacherController::class,'show'])->name('show');

    Route::get('/{id}/edit',[TeacherController::class,'edit'])->name('edit');

    Route::put('/{id}',[TeacherController::class,'update'])->name('update');

    Route::delete('/{id}',[TeacherController::class,'destroy'])->name('destroy');
});

//Student Routes
Route::prefix('students')->name('students.')->group(function () {

    Route::get('/', [StudentController::class,'index'])->name('index');

    Route::get('/create',[StudentController::class,'create'])->name('create');

    Route::post('/',[StudentController::class,'store'])->name('store');

    Route::get('/{id}',[StudentController::class,'show'])->name('show');

    Route::get('/{id}/edit',[StudentController::class,'edit'])->name('edit');

    Route::put('/{id}',[StudentController::class,'update'])->name('update');

    Route::delete('/{id}',[StudentController::class,'destroy'])->name('destroy');
});

//SchoolClass Routes
Route::prefix('classes')->name('classes.')->group(function () {

    Route::get('/classes', [SchoolClassController::class, 'index'])->name('index');

    Route::get('/classes/create', [SchoolClassController::class, 'create'])->name('create');

    Route::post('/classes', [SchoolClassController::class, 'store'])->name('store');

    Route::get('/classes/{id}', [SchoolClassController::class, 'show'])->name('show');

    Route::get('/classes/{id}/edit', [SchoolClassController::class, 'edit'])->name('edit');

    Route::put('/classes/{id}', [SchoolClassController::class, 'update'])->name('update');

    Route::delete('/classes/{id}', [SchoolClassController::class, 'destroy'])->name('destroy');
});

//Major Routes (Resource)
Route::resource('majors', MajorController::class);
