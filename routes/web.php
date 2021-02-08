<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/article', [ArticleController::class,'index'])->name('article');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin-store', [AdminController::class, 'store']);
