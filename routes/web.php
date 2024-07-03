<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/login", [AuthController::class, 'showLogin'])->name('login');

Route::get("/create-account", [AuthController::class, 'showRegistration'])->name('register');
