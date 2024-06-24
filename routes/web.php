<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUser;

Route::view('/', 'pages.home');
Route::view('/contact', 'pages.contact');
Route::resource('jobs',JobController::class);


Route::get('/register', [RegisterUser::class,'index']);



