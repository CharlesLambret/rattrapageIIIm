<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;

use Illuminate\Support\Facades\Route;

Route::resource('commandes', CommandeController::class);
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
