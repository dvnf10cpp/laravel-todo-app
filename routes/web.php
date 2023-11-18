<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoController::class, 'index']);
Route::get('/add', [TodoController::class, 'create']);
Route::get('/show', [TodoController::class, 'show']);
Route::get('/edit', [TodoController::class, 'edit']);

Route::resource('todos', TodoController::class);

