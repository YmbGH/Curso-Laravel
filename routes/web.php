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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','InicioController@index');

//Route::get('admin/permiso','Admin\PermisoController@index')->name('permiso'); //ESTO SI CACHEA

//ESTO PERMITE AGRUPAR LAS RUTAS Y NAMESPACES PARA REDUCIR CÓDIGO
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){ //ESTO NO CACHEA
    Route::get('permiso','PermisoController@index')->name('permiso'); 
    Route::get('permiso/crear','PermisoController@crear')->name('crear_permiso');
});

//Route::get('permiso/{nombre}/{slug?}','PermisoController@index')->name('permiso')->where('nombre','[A-Za-z]+');