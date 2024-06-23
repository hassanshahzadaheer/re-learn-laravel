<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;

Route::view('/', 'pages.home');
Route::view('/contact', 'pages.contact');
Route::resource('jobs',JobController::class);






