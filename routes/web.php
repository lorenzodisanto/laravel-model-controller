<?php

use App\Http\Controllers\Guest\PageController;
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

// rotta homepage
Route::get('/', [PageController::class,'base'])->name('home');

// rotta movie card
Route::get('/movies', [PageController::class,'index'])->name('movies.index');

// rotta dettaglio movie
Route::get('/movies/{id}',[PageController::class, 'show'])->name('movies.show');
