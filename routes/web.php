<?php

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

Route::get('/', 'ThemeController@index')->name('home');
Route::resource('temas', 'ThemeController');
Route::get('/search', 'ThemeController@search');
Route::get('/resultados/{id}', 'ThemeController@listado');
Route::get('tema/{id}', 'ThemeController@results');

//a las rutas tipo resource no les defines una accion..
