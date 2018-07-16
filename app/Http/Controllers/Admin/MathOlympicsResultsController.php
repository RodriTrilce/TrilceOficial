<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Academia\MathOlympicsModel as MathOlympics;
use Storage;

class MathOlympicsResultsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

      $result = MathOlympics::find($request->matholympic_id);
      dd($result);
/*
      $result->results()->create[

      ];
*/
    }


    public function storeFile($request)
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

      $request->file('base_url')->storeAs('public/' . $file->location_folder, $file->token. '.' . $file->extension);

      return $file;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $file = File::where('id', $request->result_id)->first();
        Storage::delete('public/' . $file->location_folder . $file->token . '.' . $file->extension);
        $file->delete();

        return redirect()->action('Admin\MathOlympicsController@edit', $request->matholympic_id)->with('success','Resultado eliminado correctamente');
    }
}
