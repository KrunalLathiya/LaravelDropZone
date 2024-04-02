<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('image/upload/store', [ImageUploadController::class, 'store']);
Route::post('image/delete', [ImageUploadController::class, 'destroy']);