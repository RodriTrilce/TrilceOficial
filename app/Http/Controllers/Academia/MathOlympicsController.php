<?php
namespace App\Http\Controllers\Academia;

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

     $lima = MathOlympicsModel::whereNull('isprovince')
     ->orderBy('finish_at', 'desc')
     ->get();

     $province = MathOlympicsModel::where('isprovince',  '=', '1')
     ->orderBy('finish_at', 'desc')
     ->get();


     return view('/academia/math_olympics')->with([
       'lima'       => $lima,
       'province'   => $province,
       'data'       => $data
     ]);
   }
}
