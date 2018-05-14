<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $print: containt html pre charge page effect
    if(parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/')
      $print = "<div id=\"loader-wrapper\"><div id=\"loader\"></div><div class=\"loader-section section-left\"></div><div class=\"loader-section section-right\"></div></div>";
    else
    $print = '';
    

    return view('/colegio/index')->with(['print' => $print]);
  }
}
