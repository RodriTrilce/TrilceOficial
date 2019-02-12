<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BannersModel as Banner;
use Meta;
use Route;
use App\Models\Popup;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $banners = Banner::where([
      ['type',  '=', 'index_academia'],
      ['state', '=', '1']
    ])
    ->orderBy('position', 'asc')
    ->get();

    $popup = Popup::where([
      ['type',   '=', Route::currentRouteName()]
    ])
    ->get();

    Meta::set('title', ' Academia Trilce');
    Meta::set('description', 'Academia Trilce con más de 38 años de experiencia potenciando el nivel académico y desarrollo personal de nuestros alumnos.');



    return view('/academia/index')
    ->with([
      'print'   => (parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/' ? true : false),
      'banners' => $banners,
      'popup'   => $popup
    ]);

  }
}
