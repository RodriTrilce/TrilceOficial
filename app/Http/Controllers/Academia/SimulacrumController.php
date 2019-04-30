<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;


class SimulacrumController extends Controller
{

     public function index($university)
     {
        $university = University::validate( ucwords(Str::slug($university, ' ')) );
        
        if(!$university)
          return abort(404);
        
        $results = Simulacrum::where('university_id', $university->id)
        ->orderBy('created_at', 'DESC')
        ->get();

       return view('/academia/simulacrum')->with([
         'university' => $university,
         'data' => $results
       ]);
     }

}
