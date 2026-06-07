<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);

Route::get('/set-session', [TestController::class, 'setSession']);
Route::get('/get-session', [TestController::class, 'index']); // does the same task as done in '/' route

Route::get('/delete-session', [TestController::class, 'deleteSession']);