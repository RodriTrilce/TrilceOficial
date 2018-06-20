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
}
