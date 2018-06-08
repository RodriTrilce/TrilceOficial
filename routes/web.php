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

// Test url for any propouses
Route::name('prueba')->get('/prueba', function () {
   return view('academia.test');
});


/**
 *  Admin
 */

Auth::routes();
Route::get('/admin', 'Admin\IndexController@index')->name('admin-index');


/**
 * General
 */
 
 // Inicio (Home)
 Route::name('home')->get('/', function () {
    return view('home');
 });


/**
 *  Academia
 */

// Página Princial (Index)
Route::name('academia-index')
      ->get('/academia', 'Academia\IndexController@index');

// Preparación (Preparation)
Route::name('academia-preparation')
      ->get('/academia/preparacion-{university}', 'Academia\PreparationController@index');

// Sedes (Venue)
Route::name('academia-venue')
      ->get('/academia/sede/{barrack}', 'Academia\VenueController@index');
      
Route::get('/academia/sede', function(){
  return redirect('/academia');
});

// Simulacros (Simulacrum)
Route::name('academia-simulacrum')
      ->get('/academia/simulacros-{university}', 'Academia\SimulacrumController@index');
      
Route::get('/academia/simulacros', function(){
  return redirect('/academia');
});

// Solucionarios (Solutions)
Route::name('academia-solutions')
      ->get('/academia/solucionarios-{university}', 'Academia\SolutionsController@index');
      
Route::get('/academia/solucionarios', function(){
  return redirect('/academia');
});

// Lista de Cachimbos (Entering)
Route::name('academia-entering')
      ->get('/academia/lista-de-cachimbos-{university}', 'Academia\EnteringController@index');
      
Route::get('/academia/lista-de-cachimbos', function(){
  return redirect('/academia');
});

// Olimpiadas Matematicas (MathOlympics)
Route::name('academia-matholympics')
      ->get('/academia/olimpiadas-matematicas', 'Academia\MathOlympicsController@index');

// Nosotros (AboutUs)
Route::name('academia-aboutus')
      ->get('/academia/nosotros', 'Academia\AboutUsController@index');

// Contactenos (Contact)
Route::name('academia-contact')
      ->get('/academia/contacto', 'Academia\ContactController@index');
Route::post('/academia/contacto', 'Academia\ContactController@send');

// Matricula en linea (Enrollment)
Route::name('academia-enrollment')
      ->get('/academia/matricula-en-linea', 'Academia\EnrollmentController@create');
      
Route::name('academia-enrollment-finish')
      ->post('/academia/matricula-en-linea', 'Academia\EnrollmentController@store');
      
Route::name('academia-enrollment-download')
      ->post('/academia/matricula-en-linea/descargar-pdf', 'Academia\EnrollmentController@download');



/**
 *  Colegio
 */

// Página Princial (Index)
Route::name('colegio-index')
      ->get('/colegio', 'Colegio\IndexController@index');

// Admisión (Admission)
Route::name('colegio-admission')
      ->get('/colegio/admision-{modality}', 'Colegio\AdmissionController@index');

// Nosotros (AboutUs)
Route::name('colegio-aboutus')
      ->get('/colegio/nosotros', 'Colegio\AboutUsController@index');

// Contactenos (Contact)
Route::name('colegio-contact')
      ->get('/colegio/contacto', 'Colegio\ContactController@index');
      
Route::post('/colegio/contacto', 'Colegio\ContactController@send');

// Sedes (Venue)
Route::name('colegio-venue')
      ->get('/colegio/sede/{barrack}', 'Colegio\VenueController@index');
      
Route::get('/colegio/sede', function(){
  return redirect('/colegio');
});

// Preguntas Frecuentes (FrequentQuestions)
Route::name('colegio-frequentquestions')
      ->get('/colegio/preguntas-frecuentes', 'Colegio\FrequentQuestionsController@index');

// Guia de pagos en linea (PaymentGuide)
Route::name('colegio-paymentguide')
      ->get('/colegio/guia-de-pagos-en-linea', 'Colegio\PaymentGuideController@index');

// Blog (Blog)
Route::name('colegio-blogpost')
      ->get('/colegio/blog/{id}-{post}', 'Colegio\BlogController@post');
      
Route::name('colegio-blog')
      ->get('/colegio/blog', 'Colegio\BlogController@index');



