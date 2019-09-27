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

//RUTAS NOTICIAS
Route::group(['prefix'=>'Noticias'],function () {

  Route::get('/indexNoticias', [
    'uses' => 'noticiasController@indexNoticias',
  ])->name('indexNoticias');

  Route::get('/fichaNoticia', [
    'uses' => 'noticiasController@fichaNoticia',
  ])->name('fichaNoticia');

  Route::get('/listadoDeNoticias', [
    'uses' => 'noticiasController@listadoDeNoticias',
  ])->name('listadoDeNoticias');

  Route::get('/formularioCrearNoticia', [
    'uses' => 'noticiasController@formularioCrearNoticia',
  ])->name('formularioCrearNoticia');
});


//FIN RUTAS NOTICIAS

//RUTAS EVENTOS
Route::group(['prefix'=>'Eventos'],function () {

  Route::get('/indexEventos', [
    'uses' => 'eventosController@indexEventos',
  ])->name('indexNoticias');

  Route::get('/fichaEventos', [
    'uses' => 'eventosController@fichaEventos',
  ])->name('fichaNoticia');

  Route::get('/listadoDeEventos', [
    'uses' => 'eventosController@listadoDeEventos',
  ])->name('listadoDeNoticias');

  Route::get('/formularioCrearEventos', [
    'uses' => 'eventosController@formularioCrearEventos',
  ])->name('formularioCrearNoticia');
});
//FIN RUTAS EVENTOS
