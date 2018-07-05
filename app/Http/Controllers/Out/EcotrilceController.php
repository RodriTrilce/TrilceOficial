<?php

namespace App\Http\Controllers\Out;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Out\Ecotrilce;
use App\Mail\Out\Ecotrilce as EcotrilceMail;

class EcotrilceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $data = new \stdClass();
      $data->name = 'franco';
      $data->email = 'fsalcedo@trilce.edu.pe';

      Mail::send( new EcotrilceMail( $data ) );
    }
}
