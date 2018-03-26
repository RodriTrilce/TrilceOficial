<?php

namespace App\Http\Controllers\Academia;

use App\Models\Academia\SimulacrumModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SimulacrumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($university)
     {
       switch ($university) {
         case 'san-marcos':
             $var = [
               'title' => 'San Marcos',
               'type'  => $university
             ];
           break;
         
         case 'uni':
             $var = [
               'title' => 'UNI',
               'type'  => $university
             ];
           break;

         case 'pucp':
             $var = [
               'title' => 'Pucp',
               'type'  => $university
             ];
           break;
         
         default:
             abort(404);
           break;
       }
       return view('/academia/simulacrum')->with($var);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academia\SimulacrumModel  $simulacrumModel
     * @return \Illuminate\Http\Response
     */
    public function show(SimulacrumModel $simulacrumModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academia\SimulacrumModel  $simulacrumModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SimulacrumModel $simulacrumModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academia\SimulacrumModel  $simulacrumModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimulacrumModel $simulacrumModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academia\SimulacrumModel  $simulacrumModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimulacrumModel $simulacrumModel)
    {
        //
    }
}
