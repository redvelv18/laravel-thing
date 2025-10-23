<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/{id}/show', [ProductController::class, 'show']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::post('/products/{id}/update', [ProductController::class, 'update']);