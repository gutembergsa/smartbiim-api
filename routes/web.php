<?php

use App\Http\Controllers\ResourceViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResourceViewController::class, 'listView'])->name('resources.list');
Route::get('/{id}/update', [ResourceViewController::class, 'updateView'])->name('resources.update');
Route::get('/create', [ResourceViewController::class, 'createView'])->name('resources.create');
