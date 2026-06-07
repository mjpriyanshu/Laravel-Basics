<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'showUsers'])->name('users');

Route::get('/users/{id}', [UserController::class, 'singleUser'])->name('view.user');

Route::get('/add-user', [UserController::class, 'addUser'])->name('add.user');

Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('update.user');

Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete.user');


/*QB with Form */
Route::view('newuser', '/adduser');
Route::post('/add', [UserController::class, 'addUserForm'])->name('add.user.form');
Route::match(['get', 'post'], '/update/{id}', [UserController::class, 'updateUserForm'])->name('update.user.form');

/*Localization Routes */
Route::get('/en', [HomeController::class,'english']);
Route::get('/hi', [HomeController::class,'hindi']);
Route::get('/es', [HomeController::class,'spanish']);

