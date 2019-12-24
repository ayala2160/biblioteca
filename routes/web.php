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
//Welcome
Route::get('/', function () {
    return view('welcome');
});
//Verificación de email
Auth::routes(['verify' => true]);
//Inicio
Route::get('/home', 'HomeController@index')->name('home');
//Middleware
//Route::middleware(['auth', 'verified'])->group(function () {
//Libros, computadoras y estudiantes
Route::resource('computadora', 'ComputadoraController');
Route::resource('estudiante', 'EstudianteController');
Route::resource('libro', 'libroController');
Route::get('libro/{libro}/devuelto', 'LibroController@notificarLibroDevuelto')->name('libro.devuelto');
//Archivos
Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');
Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');
Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');
//Bienvenida
Route::get('/hola/{nombre?}/{apellido?}', 'SitioController@bienvenida');
//Contacto & mensajes
Route::get('contacto', 'SitioController@contacto')->name('contacto');
Route::post('contacto-guardar', 'SitioController@guardaContacto')->name('guardar');
Route::get('ver-mensajes', 'SitioController@verMensajes')->name('ver-mensajes');
//});
