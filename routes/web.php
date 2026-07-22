<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Manajemen Siswa
Route::name('students.')->prefix('students')->group(function() {
    Route::get('/', [StudentController::class])->name('index');

    Route::get('/{id}', function($id) {
        return "Memastikan detail siswa dengan ID: {$id}";
    })->name('show');
});
