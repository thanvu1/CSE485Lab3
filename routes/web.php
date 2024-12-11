<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route định nghĩa
Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);
