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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
Route::resource('computadora', 'ComputadoraController');
Route::resource('estudiante', 'EstudianteController');
Route::resource('libro', 'libroController');
//Archivos
Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');
Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');
Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');
});
