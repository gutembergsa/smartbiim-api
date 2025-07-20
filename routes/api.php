<?php

use App\Http\Controllers\Api\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/resource', [ResourceController::class, 'getAll'])->name('resource.getAll');
Route::get('/resource/{id}', [ResourceController::class, 'getByID'])->name('resource.getByID');
Route::post('/resource', [ResourceController::class, 'post'])->name('resource.create');
Route::put('/resource/{id}', [ResourceController::class, 'updateByID'])->name('resource.update');
Route::delete('/resource/{id}', [ResourceController::class, 'delete'])->name('resource.delete');
