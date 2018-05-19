<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Colegio\VenueModel as VenueDB;

class VenueController extends Controller
{
  public function index($barrack)
  {
    $venue = VenueDB::where('slug', $barrack)->first();
    
    if(!isset($venue->name))
      return abort(404);

    return view('/colegio/venue')->with([
      'data' => $venue,
      'address' => $venue->address,
      'investment' => $venue->investment,
      'page' => 'venue'
    ]);
  }
}
