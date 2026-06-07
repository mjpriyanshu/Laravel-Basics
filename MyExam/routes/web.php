<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/insert', [StudentController::class, 'store'])->name('students.insert');
Route::get('/students/table', [StudentController::class, 'table'])->name('students.table');
Route::get('/result', [StudentController::class, 'result'])->name('students.result');
