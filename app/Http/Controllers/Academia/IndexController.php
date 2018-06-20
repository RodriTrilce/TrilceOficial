<?php

namespace App\Http\Controllers\Academia;

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
    return view('/academia/index')->with([
      'print'   => (parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/' ? true : false),
      'action'  => ''
    ]);
  }
}
