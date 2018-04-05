<?php

/*
|--------------------------------------------------------------------------
| Web Routes Trilce
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/**
 *  Academia
 */

// Home
Route::get('/', function () {
   return view('home');
});

// Index
Route::get('/academia', function() {
  return view('academia/index');
});

// Preparación (Preparation)
Route::get('/academia/preparacion-{university}', 'Academia\PreparationController@index');

// Sedes (Venue)
Route::get('/academia/sede/{barrack}', 'Academia\VenueController@index');
Route::get('/academia/sede', function(){
  return redirect('/academia');
});

// Simulacros (Simulacrum)
Route::get('/academia/simulacros-{university}', 'Academia\SimulacrumController@index');
Route::get('/academia/simulacros', function(){
  return redirect('/academia');
});

// Solucionarios (Solutions)
Route::get('/academia/solucionarios-{university}', 'Academia\SolutionsController@index');
Route::get('/academia/solucionarios', function(){
  return redirect('/academia');
});

// Lista de Cachimbos (Entering)
Route::get('/academia/lista-de-cachimbos-{university}', 'Academia\EnteringController@index');
Route::get('/academia/lista-de-cachimbos', function(){
  return redirect('/academia');
});

// Olimpiadas Matematicas (MathOlympics)
Route::get('/academia/olimpiadas-matematicas', 'Academia\MathOlympicsController@index');









