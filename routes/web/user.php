<?php

use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

// User routes
Route::get('src/checkout', [UserController::class, 'checkout'])
->name('user.checkout')
->middleware(['auth', 'cliente']);

Route::get('src/produtos', [UserController::class, 'produtoUser'])
->name('user.produto');

Route::get('src/detalhe', [UserController::class, 'detalhesUser'])
->name('user.detalhar');

Route::get('src/dashboard', [UserController::class, 'dashboard'])
->name('user.dashboard');
