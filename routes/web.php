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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/altaProduct', 'AltaProductController@formularioAlta');
Route::post('/altaProduct', 'AltaProductController@alta')->name('altaProduct');
Route::get('/altaBrand',  function(){return view('altaBrand');});
Route::post('/altaBrand', 'AltaBrandController@alta')->name('altaBrand');
Route::get('/listadoEmpresas', 'empresaController@listadoEmpresas')->name('listadoEmpresas');
Route::get('/listadoProductos/{id}', 'productosController@listadoProductos')->name('listadoProductos');
