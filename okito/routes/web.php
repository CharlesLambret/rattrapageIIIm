<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ArticleCommandesController;

Route::resource('articles', ArticleController::class);
Route::resource('commandes', CommandesController::class);
Route::resource('article_commandes', ArticleCommandesController::class);

Route::get('/', function () {
    return view('app');
});
