<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'pages.home');

Route::resource('jobs',JobController::class);

Route::view('/contact', 'pages.contact');


