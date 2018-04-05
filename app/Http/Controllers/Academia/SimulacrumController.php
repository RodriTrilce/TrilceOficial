<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;


class SimulacrumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($university)
     {
        $university = University::validate($this->l($university));
        
        if(!$university)
          return abort(404);
        
        $results = Simulacrum::where('university_id', $university->id)->get();

       return view('/academia/simulacrum')->with([
         'university' => $university,
         'data' => $results
       ]);
     }

     /**
      * Clear slug string
      *
      * @return string
      */
     private function l($str)
     {
       return ucwords(str_replace('-', ' ', $str));
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
