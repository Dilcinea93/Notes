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

Route::get('/', 'temaController@index');



Route::post('/guardar', 'temaController@store');

Route::get('/resultados', 'temaController@results'); //ebe ser get o post?


Route::get('/falta', 'temaController@falta');

Route::get('/search', 'temaController@search');