<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreatPostController;

Route::get('/create-post', [CreatPostController::class, 'create']);
Route::post('/create-post', [CreatPostController::class, 'store']);

