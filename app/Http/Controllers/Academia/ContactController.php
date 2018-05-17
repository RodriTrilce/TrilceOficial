<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
  public function index()
  {
    return view('/academia/contact')->with(['page' => 'contact']);
  }
  
  public function send()
  {
    $request = (object)$_POST;
    
    $data = array(
              'name' => $request->contact_names,
              'mail' => $request->contact_email,
              'message' => $request->contact_message,
              'category' => 'none',
              'company' => 'none'
   );
   
    
    Mail::send('resources.mail.academia.contact', $data, function ($message) use($request) {
        $message->from('atencionalcliente@trilce.edu.pe');
        $message->to('atencionalcliente@trilce.edu.pe')->subject('Mensaje de formulario/Academia');
        echo "yes";
    });
    
  }
}
