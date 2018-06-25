<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;

class prueba extends Controller
{
    public function index()
    {
      $img = storage_path('app/public/mail/template-academia-enrollment.jpg');

      $img = Image::make($img);
      $img = $img->text('Franco Manuel', 275, 342, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(22);
        $font->color('#FFFFFF');
      });

      $img = $img->encode('jpg',80);
      $hash = md5($img->__toString());

      Storage::put("public/mail/enrollment/{$hash}.jpg", $img);

      echo storage_path("app/public/mail/enrollment/{$hash}.jpg");


    }
}
