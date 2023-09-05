<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [ImagesController::class, 'index']);

Route::get('/create', [ImagesController::class, 'create']);

Route::post('/store', [ImagesController::class, 'store']);

Route::get('/show/{id}', [ImagesController::class, 'show']);

Route::get('/edit/{id}', [ImagesController::class, 'edit']);

Route::post('/update/{id}', [ImagesController::class, 'update']);

Route::get('/delete/{id}', [ImagesController::class, 'delete']);

Route::get('/about', [HomeController::class, 'about']);
