<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/home', function () {
    return view('navbar');
});

Route::get('/', [CourseController::class, 'show']);