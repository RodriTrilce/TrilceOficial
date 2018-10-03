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
Route::get('/prueba2', 'Prueba2Controller@index');
Route::get('/img', 'prueba@index');
Route::get('/prueba3', 'prueba3@index');
Route::get('/ecotrilce', 'Out\EcotrilceController@index');



/**
 *  Admin
 */

// Index
Auth::routes();

Route::get('/admin', 'Admin\IndexController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
  Route::resource('/blog', 'BlogController');
  Route::resource('/math-olympics', 'MathOlympicsController');
  Route::resource('/math-olympics/results', 'MathOlympicsResultsController');
  Route::resource('/venue-colegio', 'VenueColegioController');
  Route::resource('/venue-academia', 'VenueAcademiaController');
  Route::resource('/banners', 'BannersController');
});


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
      ->get('/academia/prematricula', 'Academia\EnrollmentController@create');

Route::name('academia-enrollment-finish')
      ->post('/academia/prematricula', 'Academia\EnrollmentController@store');

Route::name('academia-enrollment-download')
      ->match(['get', 'post'], '/academia/prematricula/descargar-pdf', 'Academia\EnrollmentController@download');

// Blog (Blog)
Route::name('academia-blogpost')
      ->get('/academia/blog/{post}', 'Academia\BlogController@post');

Route::name('academia-blog')
      ->get('/academia/blog', 'Academia\BlogController@index');

// Matricula en linea (Enrollment)
Route::name('academia-your-best-option')
      ->get('/academia/por-que-somos-tu-mejor-opcion', 'Academia\YourBestOptionController@index');

// Multimedia
Route::name('academia-multimedia')
      ->get('/academia/multimedia', function(){
        return view('errors.work');
      });

// Preguntas Frecuentes (FrequentQuestions)
Route::name('academia-frequentquestions')
      ->get('/academia/preguntas-frecuentes', 'Academia\FrequentQuestionsController@index');


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
      ->get('/colegio/blog/{post}', 'Colegio\BlogController@post');

Route::name('colegio-blog')
      ->get('/colegio/blog', 'Colegio\BlogController@index');


// Página Princial (Index)
Route::name('colegio-educationalproposal')
      ->get('/colegio/propuesta-educativa', 'Colegio\EducationalProposalController@index');

// Multimedia
Route::name('colegio-multimedia')
      ->get('/colegio/multimedia', function(){
        return view('errors.work');
      });
