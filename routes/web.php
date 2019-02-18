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

Route::get('/', 'temaController@index')->name('home');

Route::get('tema/{id}', 'temaController@results');



Route::post('/guardar', 'temaController@store');

Route::get('/falta', 'temaController@falta');

Route::get('/editar', 'temaController@edit');


Route::get('/search', 'temaController@search');
Route::get('/resultados/{id}', 'temaController@listado');