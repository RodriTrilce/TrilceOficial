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
      $print = "<div id=\"loader-wrapper\"><div id=\"loader\" class=\"\"></div><div class=\"loader-section section-left\"></div><div class=\"loader-section section-right\"></div><div class=\"loader-trilce\">
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 91.9 100.3'><polygon points='0 0 0 22.6 14.6 22.6 14.6 16.7 36.9 16.7 36.9 85.7 30.2 85.7 30.2 100.3 61.8 100.3 61.8 85.7 55.1 85.7 55.1 16.7 77.4 16.7 77.4 22.6 91.9 22.6 91.9 0 0 0' fill='#f4633a'/></svg>
      </div></div>";
    else
    $print = '';


    return view('/colegio/index')->with(['print' => $print]);
  }
}
