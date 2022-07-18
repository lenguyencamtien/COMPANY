<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portfolio_english', [HomeController::class, 'portfolio_english']);
Route::get('/portfolio_stem', [HomeController::class, 'portfolio_stem']);
Route::get('/portfolio_development', [HomeController::class, 'portfolio_development']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/news_fs', [HomeController::class, 'news_fs']);
Route::get('/news_tb', [HomeController::class, 'news_tb']);
Route::get('/news_event', [HomeController::class, 'news_event']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/contact', [HomeController::class, 'contact']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');