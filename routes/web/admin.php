<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoriaController;
use App\Http\Controllers\Backend\ProdutoController;
use App\Http\Controllers\Backend\ProfileAdminController;
use Illuminate\Support\Facades\Route;


Route::get('admin/login', [AdminController::class, 'login'])
->name('admin.login');
Route::get('admin/forgot-password', [AdminController::class, 'forgotPassword'])
->name('admin.forgot-password');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->name('admin.dashboard')
->middleware(['auth', 'admin']);
Route::resource('admin/produtos', ProdutoController::class)
->middleware(['auth', 'admin']);
Route::resource('admin/categorias', CategoriaController::class)
->middleware(['auth', 'admin']);
Route::get('admin/produtos/muda-status', [ProdutoController::class, 'mudaStatus'])
->name('produtos.muda-status')
->middleware(['auth', 'admin']);
Route::get('admin/categorias/muda-status', [ProdutoController::class, 'mudaStatus'])
->name('categorias.muda-status')
->middleware(['auth', 'admin']);
Route::resource('admin/profile', ProfileAdminController::class)
->middleware(['auth', 'admin']);
