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
        return view('/academia/enrollment')->with(['page' => 'enrollment']);
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
         return view('/academia/enrollment_finish')->with(['page' => 'enrollment']);
     }

}
