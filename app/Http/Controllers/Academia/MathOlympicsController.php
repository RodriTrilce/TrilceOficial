<?php
namespace App\Http\Controllers\Academia;

//setlocale(LC_ALL, "es_ES", "Spanish_Spain", "Spanish");
use \Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Academia\MathOlympicsModel;

class MathOlympicsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
     $data =  MathOlympicsModel::all();
     return view('/academia/math_olympics')->with(['data' => $data]);
   }
}



