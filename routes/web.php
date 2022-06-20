<?php

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




Auth::routes();
// Route::get('/songs', 'indexController@index')->middleware('auth');
Route::get(' /', [App\Http\Controllers\WelcomeController::class, 'show']);
Route::get('/songs', [App\Http\Controllers\indexController::class, 'index'])->middleware('auth');

Route::get(' /home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get(' /song', [App\Http\Controllers\Songcontroller::class, 'index'])->middleware('auth');
Route::get(' /song/{song}', [App\Http\Controllers\Songcontroller::class, 'show'])->middleware('auth');
Route::get(' /playlist', [App\Http\Controllers\Playlistcontroller::class, 'index'])->middleware('auth');
Route::get(' /playlist/delete/{song}', [App\Http\Controllers\Songcontroller::class, 'destroy'])->middleware('auth');
Route::get(' /playlist/{playlist}', [App\Http\Controllers\Playlistcontroller::class, 'show'])->middleware('auth');
Route::get(' /genre/{genre}', [App\Http\Controllers\Genrecontroller::class, 'show'])->middleware('auth');

Route::get(' /que/add/{que}', [App\Http\Controllers\Quecontroller::class, 'store'])->middleware('auth');
Route::get(' /que/delete/{que}', [App\Http\Controllers\Quecontroller::class, 'destroy'])->middleware('auth');
Route::get(' /que/create', [App\Http\Controllers\Playlistcontroller::class, 'create'])->middleware('auth');
Route::post('/que/store', [App\Http\Controllers\Playlistcontroller::class, 'store'])->middleware('auth');
Route::get(' /que', [App\Http\Controllers\Quecontroller::class, 'show'])->middleware('auth');

