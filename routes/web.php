<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/" , [HomeController::class , 'index']);
Route::get('/signup' , [HomeController::class , 'signupPage']);
Route::get('/login' , [HomeController::class , 'loginPage']) ->name('login');

Route::post('/signupnow' , [AccountController::class , 'store']);
Route::post('/loginnow' , [AccountController::class , 'login']);
Route::post('/logout' , [AccountController::class , 'logout']);

Route::post('/createTask' , [HomeController::class , 'createTask']) ->middleware('auth');
Route::get('/changeState/{task}' , [HomeController::class , 'changeState']);