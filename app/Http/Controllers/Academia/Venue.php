<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Venue extends Controller
{
    public function index($barrack)
    {
      switch ($barrack) {
        case 'comas':
          $var = [
            'title' => 'Sede Comas'
          ];
      	break;

      	case 'los-olivos':
          $var = [
            'title' => 'Sede Los Olivos'
          ];
      	break;

      	case 'marsano':
          $var = [
            'title' => 'Sede Marsano'
          ];
      	break;

      	case 'san-isidro':
          $var = [
            'title' => 'Sede San Isidro'
          ];
      	break;

      	case 'santa-beatriz':
          $var = [
            'title' => 'Sede Santa Beatriz'
          ];
      	break;

      	case 'torrico':
          $var = [
            'title' => 'Sede Torrico'
          ];
      	break;

      	case 'villa-el-salvador':
          $var = [
            'title' => 'Sede Villa el Salvador'
          ];
      	break;

        default:
            abort(404);
          break;
      }
      
      $var['sede'] = $this->l($barrack);
      $var['map']  = ['lt' => -12.046373, 'lg' => -77.042754];
                  
      
      return view('/academia/venue')->with($var);
    }
    
    private function l($str)
    {
      return ucwords(str_replace('-', ' ', $str));
    }
}

