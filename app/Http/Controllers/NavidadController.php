<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavidadController extends Controller
{
  function index()
  {
    return view('navidad');
  }
}
