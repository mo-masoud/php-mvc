<?php

use App\Controllers\CategoryController;
use App\Controllers\EngineController;
use MasoudMVC\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\RegisterController;
use App\Controllers\UserController;
use App\Controllers\SearchController;
use App\Controllers\StoryController;

Route::get('/', [HomeController::class, 'index']);

Route::post('/login', [RegisterController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [RegisterController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/categories', [CategoryController::class, 'categories']);

Route::get('/search', [SearchController::class, 'search']);

// Stories
Route::post('/create-story', [StoryController::class, 'store']);
Route::get('/show-story', [StoryController::class, 'show']);
Route::get('/buy-story', [StoryController::class, 'buy']);

// engine
Route::get('/engine', [EngineController::class, 'engine']);
Route::post('/get-episodes', [EngineController::class, 'getEpisodes']);
Route::post('/storyOperate', [EngineController::class, 'storyOperate']);
Route::get('/uploadAsset', fn () => view('uploadAssets', includeMain: false));
Route::post('/uploadAsset', fn () => view('uploadAssets', includeMain: false));
Route::get('/review', [EngineController::class, 'review']);