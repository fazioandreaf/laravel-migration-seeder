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

Route::get('/', function () {
    return view('welcome');
});
Route::get('pages/homepage','controller_movies@movies')->name('homepage');
Route::get('film/{id}','controller_movies@film')->name('film');
Route::get('pages/form','controller_movies@form')->name('form');
Route::post('/store/movie', 'controller_movies@store')
    -> name('store');
