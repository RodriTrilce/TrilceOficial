<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('/academia/contact')->with(['page' => 'contact']);
  }
  
  public function send()
  {
    $request = (object)$_POST;
  
    $data = new \stdClass();
    $data->content = $request->contact_message;
    $data->name = $request->contact_names;
    $data->phone = $request->contact_phone;
    $data->email = $request->contact_email;

    Mail::send(new ContactForm($data));
    
  }
}
