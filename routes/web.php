<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompoController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/article', [ArticleController::class,'index'])->name('article');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
