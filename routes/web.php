<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


// 
Route::get('/students/del', [StudentController::class, 'del']);
Route::resource('students', StudentController::class);