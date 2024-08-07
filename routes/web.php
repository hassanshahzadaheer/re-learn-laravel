<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;

Route::get('/test-queue', function () {

        $job = Job::first();
        TranslateJob::dispatch($job);
        return "Check your log file.";
});

Route::get('/', [JobController::class, 'index']);
Route::view('/contact', 'pages.contact');


Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')
        ->middleware('auth')
        ->can('edit', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');



Route::get('/register', [RegisterUser::class, 'create']);
Route::post('/register', [RegisterUser::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destory']);
