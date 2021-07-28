<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.movieDetails');
Route::get('/register', [UserController::class, 'getRegistration'])->name('RegisterPage');
Route::post('/register', [UserController::class, 'postRegistration'])->name('Register');
Route::get('/login', [UserController::class, 'getLogin'])->name('LoginPage');
Route::post('/login', [UserController::class, 'postLogin'])->name('Login');