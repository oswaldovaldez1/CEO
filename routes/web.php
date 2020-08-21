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

/*Route::get('/modal', function () {
    return view('modal2');
});*/


Route::get('/link', function () {
    Artisan::call('storage:link');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros/index');
});

Route::get('/horarios', function () {
    return view('horario/horario');
});

Route::get('/horario', function () {
    return view('horario/horario');
});

/*Route::get('/horario','WebController@horario');*/

Route::get('/encuentro', function () {
    return view('encuentro/index');
});
Route::get('/actparalelas', function () {
    return view('paralelas/index');
});

Route::get('/ponentes', function () {
    return view('ponentes/index');
});

Route::get('/privacidad', function () {
    return view('condiciones/index');
});
/*
Route::get('/desarrollo', function () {
    return view('pruebas');
});*/

Route::post('/economianaranja', 'WebController@economianaranja');
Route::post('/economiasocial', 'WebController@economiasocial');

Route::post('/iodemc', 'WebController@iodemc');
Route::post('/anahuac', 'WebController@anahuac');
Route::post('/sum', 'WebController@sum');

Route::post('/iodemcdir', 'WebController@iodemcdir');
Route::post('/anahuacdir', 'WebController@anahuacdir');
Route::post('/sumdir', 'WebController@sumdir');

Route::post('/ponente1', 'WebController@ponente1');
Route::post('/ponente2', 'WebController@ponente2');
Route::post('/ponente3', 'WebController@ponente3');
Route::post('/ponente4', 'WebController@ponente4');
Route::post('/ponente5', 'WebController@ponente5');
Route::post('/ponente6', 'WebController@ponente6');

Route::get('/pruebas', 'WebController@pruebas');
Route::get('/prueba', function () {
    return view('prueba');
});


Route::get('/ponentes/todos', 'PonentesController@todos');
Route::get('/ponentes/todo/{pantalla}', 'PonentesController@todos1');
Route::get('/ponentes/{ponencia}/{pantalla}', 'PonentesController@grid');

Route::get('/ponentes/{ponencia}/{ponente}/{pantalla}', 'PonentesController@ponentesinfo');
Route::get('/paso/{tamanio}/{subindice}', 'LetrasController@lettras');
