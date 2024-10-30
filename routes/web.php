<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

// existing welcome route
Route::get('/', function () {
    return view('welcome');
});

// route for the resume
Route::get('/resume', [ResumeController::class, 'show']);
