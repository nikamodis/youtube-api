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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
Route::get('/', 'App\Http\Controllers\YoutubeController@videos')->name('videos');
Route::get('/results', 'App\Http\Controllers\YoutubeController@results')->name('results');
Route::get('/watch', 'App\Http\Controllers\YoutubeController@watch')->name('watch');
Route::resource('upload', 'App\Http\Controllers\YoutubeController');
