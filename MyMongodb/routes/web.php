<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert',
    [StudentController::class,'insert']);

Route::get('/students',
    [StudentController::class,'index']);

Route::get('/student/{id}',
    [StudentController::class,'show']);

Route::get('/update/{id}',
    [StudentController::class,'updateStudent']);

Route::get('/delete/{id}',
    [StudentController::class,'deleteStudent']);