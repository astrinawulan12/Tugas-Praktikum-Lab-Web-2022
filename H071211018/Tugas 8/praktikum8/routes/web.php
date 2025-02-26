<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/', [StudentsController::class, 'store']);

Route::get('/edit/{id}', [StudentsController::class, 'edit']);

Route::post('/edit/{id}', [StudentsController::class, 'update']);


Route::get('/delete/{id}', [StudentsController::class, 'destroy']);






