<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\SessionController;

Route::view('/', 'pages.home');
Route::view('/contact', 'pages.contact');
Route::resource('jobs',JobController::class);


Route::get('/register',[RegisterUser::class,'create']);
Route::post('/register',[RegisterUser::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);



