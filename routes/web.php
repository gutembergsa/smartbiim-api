<?php

use App\Http\Controllers\Api\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResourceController::class, 'list'])->name('resources.list');
Route::get('/{id}/update', [ResourceController::class, 'update'])->name('resources.update');
Route::get('/create', [ResourceController::class, 'create'])->name('resources.create');
