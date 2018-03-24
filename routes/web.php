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


Route::get('/', function () {
    return view('home');
});


/**
 *  Rutas Academia
 */
Route::get('/academia', function() {
  return view('academia/index');
});

Route::get('/academia/preparacion-{university}', 'Academia\Preparation@index');

Route::get('/academia/sede/{barrack}', 'Academia\Venue@index');
Route::get('/academia/sede', function(){
  return redirect('/academia');
});

