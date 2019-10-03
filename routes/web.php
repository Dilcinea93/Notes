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

Route::resource('temas', 'ThemeController');
Route::get('/search/{id?}/{curso?}', 'ThemeController@search');
Route::view('/ayuda', 'ayuda')->name('help');
Route::post('elimina_registros','ThemeController@elimina_registros')->name('elimina_registros');

/**
 * 
 * Ruta resource:
 * 
 * temas.index
 * temas.create
 * temas.store
 * temas.edit
 * temas.update
 * temas.show/id
 * temas.destroy
 */
//Route::post('/save', 'ThemeController@store');
Route::get('/destroy/{id}', 'ThemeController@destroy');

Route::get('/update/{id}', 'ThemeController@edit');
Route::post('/update/{id}', 'ThemeController@update');
Route::post('elimina_registros','ThemeController@destroye')->name('elimina_registro');

Route::get('/resultados/{id}/{curso?}', 'ThemeController@listado');
//Route::get('tema/{id}/{curso?}', 'ThemeController@results');
//Route::get('cursos', 'ThemeController@results')->name('cursos');



// Route::get('/indexpost', 'PostsController@index');
// Route::resource('posts','PostsController');
// Route::post('posts/changeStatus', array('as' > 'changeStatus', 'uses' => 'PostsController@changeStatus'));
//ajax crud


 // POST      posts                  posts.store           App\Http\Controllers\PostsController@store
 //                                    |
 // GET|HEAD  posts                  posts.index           App\Http\Controllers\PostsController@index                   
               
 //                                    |
 // GET|HEAD  posts/create           posts.create         App\Http\Controllers\PostsController@create                 
 //                                    |
 // GET|HEAD  posts/{post}           posts.show           App\Http\Controllers\PostsController@show                  
 //                                    |
 // GET|HEAD  posts/{post}/edit      posts.edit          App\Http\Controllers\PostsController@edit   

 //                                    |
 // PUT|PATCH posts/{post}           posts.update         App\Http\Controllers\PostsController@update                  
 //                                    |
 // DELETE    posts/{post}           posts.destroy       App\Http\Controllers\PostsController@destroy      


 // guardar registro especifico
 // index/ mostrar  
 // crear. Vista de edicion.
 // mostrar un registro especifico
 // editar un registro especifico
 // actualizar un registro especifico
 // borrar un registro especifico