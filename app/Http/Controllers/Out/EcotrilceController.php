<?php

namespace App\Http\Controllers\Out;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Out\Ecotrilce;
use App\Mail\Out\EcotrilceMail;

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
      $data->email = 'franco_ztd34sdfensf8923n8d8s8fjds88yjsdfy8jsdf8@hotmail.com';

      Mail::send( new EcotrilceMail( $data ) );
    }
}
