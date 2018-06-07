<?php

namespace App\Http\Controllers\Colegio;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function index(){
      Storage::disk('local')->put('file.txt', 'holi');
    }
}



/*



Storage::disk('local')->put('file.txt', 'Contents');




*/