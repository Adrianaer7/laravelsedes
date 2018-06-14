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

/* Route::get('inicio', function(){
    return view('welcome');
});


Route::get('login', function(){
return view ('registro');
}); */


Route::get('registro', 'PrincipalController@selectcategoria');
Route::post('inserta', 'PrincipalController@agregar');


/* Route::get('validar', 'PaisController@validar');
Route::post('ValidarForm', 'PaisController@ValidarForm');
Route::resource("pais", "PaisController"); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
