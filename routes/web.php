<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Li1Controller;
use App\Http\Controllers\Li2Controller;
use App\Http\Controllers\ShowController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/article', [ArticleController::class,'index'])->name('article');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin-store', [AdminController::class, 'store']);
Route::post('/delete-article/{id}', [AdminController::class, "destroy"]);
Route::post('/li-store1', [Li1Controller::class, 'store', 'index']);
Route::post('/li-store2', [Li2Controller::class, 'store', 'index']);
Route::post('/delete-list1/{id}', [Li1Controller::class, "destroy"]);
Route::post('/delete-list2/{id}', [Li2Controller::class, "destroy"]);
Route::get('/article-show/{id}', [ShowController::class, 'show']);
