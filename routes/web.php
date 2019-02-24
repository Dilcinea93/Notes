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


//ajax crud

Route::resource('posts','PostsController');
Route::post('posts/changeStatus', array('as' => 'changeStatus', 'uses' => 'PostsController@changeStatus'));
Route::get('/post', 'PostsController@index')->name('home');
Route::resource('posts','PostsController');

Route::get('falta', 'ThemeController@falta');

//a las rutas tipo resource no les defines una accion..
