<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieCategoriesController;
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

Route::group(['prefix' => 'categories',  'middleware' => 'auth'], function()
{
Route::get('/latestmovies', [MovieCategoriesController::class, 'getLatestmovies'])->name('latestmovies');
Route::get('/popularmovies', [MovieCategoriesController::class, 'getPopularmovies'])->name('popularmovies');
Route::get('/upcomingmovies', [MovieCategoriesController::class, 'getUpcomingmovies'])->name('upcomingmovies');
Route::get('/movies/{movie}', [MovieCategoriesController::class, 'show'])->name('movies.CategoryDetails');
Route::get('/logout', [UserController::class, 'getLogout'])->name('Logout');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.movieDetails');

});

Route::group(['middleware' => 'guest'], function()
{
Route::get('/register', [UserController::class, 'getRegistration'])->name('RegisterPage');
Route::post('/register', [UserController::class, 'postRegistration'])->name('Register');
Route::get('/login', [UserController::class, 'getLogin'])->name('LoginPage');
Route::post('/login', [UserController::class, 'postLogin'])->name('Login');
});