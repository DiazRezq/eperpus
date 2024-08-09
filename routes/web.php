<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
