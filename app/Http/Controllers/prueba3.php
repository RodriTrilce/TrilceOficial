<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class prueba3 extends Controller
{

  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->source = new \stdClass;
    $this->source->uni    = 'http://app.trilce.edu.pe/informacion-ciclos-uni/registro/';
    $this->source->sm     = 'http://app.trilce.edu.pe/informacion-ciclos-sm/registro/';
    $this->source->pucp   = 'http://app.trilce.edu.pe/informacion-ciclos-cat/registro/';
  }

  /**
   * Index show
   *
   * @return void
   */
  public function index()
  {
    echo $this->source->uni;
  }

}
