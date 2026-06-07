<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [UploadController::class, 'display']);
Route::post('/upload', [UploadController::class, 'submit']);