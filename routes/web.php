<?php

use MasoudMVC\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\RegisterController;
use App\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'submit']);

Route::get('/users', [UserController::class, 'getAllUsers']);