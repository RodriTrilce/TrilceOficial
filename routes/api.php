<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Academia/Entering = Lista de cachimbos api
Route::get('/academia/entering/{university}/{year}', 'Academia\EnteringResourceController@show');

// Academia/Enrollment = Matricula en linea
Route::get('/academia/enrollment/{university}', 'Academia\EnrollmentResourceController@university');
Route::get('/academia/enrollment/{university}/{venue}', 'Academia\EnrollmentResourceController@venue');
//Route::get('/academia/enrollment/{university}/{venue}/{cycle}', 'Academia\EnrollmentResourceController@{cycle}');
