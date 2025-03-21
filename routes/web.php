<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $pw = env("PWD");
    // dd($pw);
    return view('index', ['pw' => $pw]);
})->name('index');


// 
Route::get('/students/del', [StudentController::class, 'del']);
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('cars', CarController::class);
