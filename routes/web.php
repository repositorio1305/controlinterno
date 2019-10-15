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

Route::get('/','InicioController@index');
Route::get('seguridad/login','seguridad\loginController@index')->name('login');
Route::post('seguridad/login','seguridad\loginController@login')->name('login_post');
Route::get('seguridad/logout','seguridad\loginController@logout')->name('logout');

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware'=>'auth'], function () {
   Route::get('/','AdminController@index')->name('admin');
   Route::get('cargo','CargoController@index')->name('cargo');
   Route::get('cargo/crear','CargoController@crear')->name('crear_cargo');
   Route::get('cargo/guardar','CargoController@guardar')->name('guardar_cargo');
   Route::get('menu','MenuController@index')->name('menu');
   Route::get('menu/crear','MenuController@crear')->name('crear_menu');
   Route::post('menu/guardar','MenuController@guardar')->name('guardar_menu');
   Route::get('home/mostrar','HomeController@index')->name('mostrar_home');
   Route::get('registro/crear','RegistroController@crear')->name('crear_registro');
   Route::get('registro/consulta-usuario','RegistroController@index')->name('consulta_usuario');
   Route::post('registro/guardar','RegistroController@guardar')->name('guardar_empleado');
   Route::get('inicio','HomeController@create')->name('inicio');
   Route::get('usuario/crear','UsuarioController@index')->name('usuario_crear');
   Route::get('proyecto/crear','ProyectoController@index')->name('proyecto_crear');
   Route::post('proyecto/guardar','ProyectoController@guardar')->name('guardar_proyecto');
   Route::get('asignar/empleado','AsignarEmpleadoController@index')->name('asignar_empleado');
});

//Route::get('admin/cargo','Admin/CargoController@index')->name('cargo');