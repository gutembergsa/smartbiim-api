<?php

use App\Http\Controllers\Api\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/resource', [ResourceController::class, 'getAll']);
Route::get('/resource/{id}', [ResourceController::class, 'getByID']);
Route::post('/resource', [ResourceController::class, 'post']);
Route::put('/resource/{id}', [ResourceController::class, 'updateByID']);
Route::delete('/resource/{id}', [ResourceController::class, 'deleteByID']);
