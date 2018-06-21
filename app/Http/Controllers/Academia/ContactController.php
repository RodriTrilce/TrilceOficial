<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationFormContact as ValidationFormContact;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('/academia/contact')->with(['page' => 'contact']);
  }

  public function send(ValidationFormContact $request)
  {
    $request->validated();

    Mail::send( new ContactForm( $request ) );

    return view('/academia/contact')->with([
                                              'data'    => $request,
                                              'status'  => true
                                            ]);

                                            // $status = false;
                                            // if(count(Mail::failures()) > 0){
                                            //  $status = true;
                                            // }
  }
}
