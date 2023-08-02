<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/commandes/createWithTable/{table_id}', [App\Http\Controllers\CommandeController::class, 'createWithTable']);
Route::get('/api/tables', [App\Http\Controllers\TableController::class, 'index']);

