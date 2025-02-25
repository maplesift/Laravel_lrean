<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    $pw = env("PWD");
    // dd($pw);
    return view('index', ['pw' => $pw]);
})->name('index');


// 
Route::get('/students/del', [StudentController::class, 'del']);
Route::resource('students', StudentController::class);
