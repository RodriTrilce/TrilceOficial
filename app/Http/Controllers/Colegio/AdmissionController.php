<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
  public function index($modality)
  {
    switch ($modality) {
      case 'nuevo':
          $var = [
            'title' => 'Nuevo',
            'type'  => $modality
          ];
        break;
      
      case 'traslado':
          $var = [
            'title' => 'Traslado',
            'type'  => $modality
          ];
        break;

      case 'regular':
          $var = [
            'title' => 'Regular',
            'type'  => $modality
          ];
        break;
      
      default:
          abort(404);
        break;
    }
    return view('/colegio/admission')->with($var);
  }
}
