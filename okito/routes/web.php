<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommandeController;

Route::resource('commandes', CommandeController::class);

Route::get('/', function () {
    return redirect()->route('commandes.create');
});
