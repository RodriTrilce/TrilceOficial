<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Academia\MathOlympicsModel as MathOlympics;
use App\Models\Academia\VenueModel as VenueAcademia;
use App\Models\Colegio\VenueModel as VenueColegio;
use App\Models\File;
use \Mimey\MimeTypes as Mime;

use Storage;

// Requests
use App\Http\Requests\Admin\StoreMathOlympics;

class MathOlympicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = MathOlympics::all();
      return view('admin.math_olympics.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.math_olympics.create')->with([
        'venueColegio' => VenueAcademia::all(),
        'venueAcademia' => VenueColegio::all()
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMathOlympics $request)
    {
      $data = $request->validated();

      if($request->file('base_url'))
      {
        $mime = new Mime;
        $file = new File;

        $file->token              = date("Y-m", strtotime($request->finish_at)) . '-bases-' . str_slug($request->venue);
        $file->type               = 'pdf';
        $file->mime               = $request->file('base_url')->getMimeType();
        $file->extension          = $mime->getExtension($request->file('base_url')->getMimeType());
        $file->location_folder    = 'academia/documents/olimpiadas-matematicas';
        $file->name               = 'Bases olimpiadas matemáticas ' . $request->venue;
        $file->size               = $request->file('base_url')->getClientSize();
        $file->save();

        $save = $request->file('base_url')->storeAs('public/' . $file->location_folder, $file->token);

        if($save)
        {
          $new = MathOlympics::create([
            'title' => $request->title,
            'type' => $request->type,
            'grade' => $request->grade,
            'venue' => $request->venue,
            'base_url' => ($file ? $file->id : ''),
            'inscription_url' => $request->inscription_url,
            'inscription_group_url' => $request->inscription_group_url,
            'finish_at' => $request->finish_at,
          ]);

          return view('admin.math_olympics.create')->with([
            'data' => $request,
            'venueColegio' => VenueAcademia::all(),
            'venueAcademia' => VenueColegio::all()
          ]);
        }
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
