<?php

namespace App\Http\Controllers\Academia;

use App\Models\Academia\EnrollmentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Academia\StoreEnrollment as StoreEnrollment;

class EnrollmentController extends Controller
{
    /**
     * Create new enrollment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/academia/enrollment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(StoreEnrollment $request)
     {
         $validatedData = $request->validated();
         return view('/academia/enrollment_finish');         
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
