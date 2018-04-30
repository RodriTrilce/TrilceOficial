<?php

namespace App\Http\Controllers\Academia;

use App\Models\Academia\EnrolmenModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrolmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('/academia/enrolmen');
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
     * @param  \App\Models\Academia\EnrolmenModel  $enrolmenModel
     * @return \Illuminate\Http\Response
     */
    public function show(EnrolmenModel $enrolmenModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academia\EnrolmenModel  $enrolmenModel
     * @return \Illuminate\Http\Response
     */
    public function edit(EnrolmenModel $enrolmenModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academia\EnrolmenModel  $enrolmenModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnrolmenModel $enrolmenModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academia\EnrolmenModel  $enrolmenModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnrolmenModel $enrolmenModel)
    {
        //
    }
}
