<?php

namespace App\Http\Controllers\Colegio;

define('PATH', str_replace('/public','/',getcwd()).'resources/internal/colegio/payment-guide/');

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentGuideController extends Controller
{
  public function index()
  {
    return view('/colegio/payment_guide');
  }

  public function download($guide)
  {
    switch ($guide) {
      case 'guia-de-pagos-bbva.pdf':
          $guide = 'guia-de-pagos-bbva.pdf';
        break;

      case 'guia-de-pagos-bcp.pdf':
          $guide = 'guia-de-pagos-bcp.pdf';
        break;

      case 'guia-de-pagos-scotiabank.pdf':
          $guide = 'guia-de-pagos-scotiabank.pdf';
        break;

      default:
        abort(404);
      break;
    }
    return response()->download( PATH . $guide);
  }

}
