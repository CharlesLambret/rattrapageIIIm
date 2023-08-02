<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ArticleCommandeController;

Route::resource('articles', ArticleController::class);
Route::resource('commandes', CommandeController::class);
Route::resource('article_commandes', ArticleCommandeController::class);

Route::get('/', function () {
    return view('app');
});
