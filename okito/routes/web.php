<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ArticleCommandeController;

Route::resource('articles', ArticleController::class);
Route::resource('tables', TableController::class);
Route::resource('commandes', CommandeController::class);
Route::resource('article_commandes', ArticleCommandeController::class);
