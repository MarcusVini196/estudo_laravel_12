<?php

use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

// User routes
Route::get('src/checkout', [UserController::class, 'checkout'])
->name('user.checkout')
->middleware(['auth', 'cliente']);
