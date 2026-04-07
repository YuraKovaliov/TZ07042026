<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ShowController;
use App\Http\Controllers\Api\StoreController;
use App\Http\Controllers\Api\UpdateController;
use App\Http\Controllers\Api\DestroyController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [ShowController::class, 'show']);
Route::post('/posts', [StoreController::class, 'store']);
Route::put('/posts/{id}', [UpdateController::class, 'update']);
Route::delete('/posts/{id}', [DestroyController::class, 'destroy']);