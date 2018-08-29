<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BannersModel as Banner;

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
      ['type',  '=', 'index_colegio'],
      ['state', '=', '1']
    ])
    ->orderBy('position', 'asc')
    ->get();

    return view('/colegio/index')
    ->with([
      'print'   => (parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/' ? true : false),
      'banners' => $banners
    ]);
  }
}
