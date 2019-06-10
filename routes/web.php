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
    Route::post('permiso','PermisoController@guardar')->name('guardar_permiso');
    /*RUTAS DE MENÚ*/
    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/crear','MenuController@crear')->name('crear_menu');
    Route::post('menu','MenuController@guardar')->name('guardar_menu');
    Route::post('menu/guardar-orden','MenuController@guardarOrden')->name('guardar_orden');
    /*RUTAS DE ROL*/
    Route::get('rol','RolController@index')->name('rol');
    Route::get('rol/crear','RolController@crear')->name('crear_rol');
    Route::post('rol','RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar','rolController@editar')->name('editar_rol');
    Route::put('rol/{id}','RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
});

//Route::get('permiso/{nombre}/{slug?}','PermisoController@index')->name('permiso')->where('nombre','[A-Za-z]+');