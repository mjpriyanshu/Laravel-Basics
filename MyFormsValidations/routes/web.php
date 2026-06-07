<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Define a route for showing the form to add a user
Route::view('/', 'addUser');

Route::post('/add', [UserController::class, 'addUser'])->name('addUser');

//to see the custom validation form
Route::get('/custom', function() {
    return view('custom');
});

//submit the custom validation form
Route::post('/custom', [UserController::class, 'customValidation'])->name('customValidation');