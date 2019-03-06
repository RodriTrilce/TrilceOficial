<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FileStorage;
use App\Models\File;
use \Mimey\MimeTypes;
use Uuid;
use Image;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();

        return view('admin.file_manager.index')->with([
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.file_manager.create')->with(['mode' => 'new']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileStorage $request)
    {

        if ($request->validated()) {

            $file = new File;
            $mime = new MimeTypes;
            
            $file->token        = Uuid::generate()->string;

            $file->type         = $mime->getExtension($request->file('file')->getMimeType());
            $file->extension    = $mime->getExtension($request->file('file')->getMimeType());
            $file->mime         = $request->file('file')->getMimeType(); 

            $file->location_folder = 'static/upload';
            $file->location_driver = 'local';

            $name = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
            $file->name = $name;
            $file->size = $request->file('file')->getClientSize();
            $file->dimension = '';
            $file->trash = '0';

            $type_images = ['jpg', 'jpeg', 'png', 'gif', 'apng'];

            if(in_array($file->extension, $type_images))
            {
                $temp_image = Image::make($request->file('file'));
                $file->dimension = $temp_image->width() . 'x' . $temp_image->height();
                unset($temp_image);
            }

            $file->save();
            $request->file('file')->storeAs('public/' . $file->location_folder, $file->token. '.' . $file->extension);

            return response()->json([
                'status'    => '1',
                'message'   => 'Subido correctamente',
                'data'      => [
                    'id' => $file->id,
                    'name' => $file->name,
                    'url' => $file->fileUrl(),
                    'urlcute' => '/d/' . $file->id . '/' . str_slug($name, '-') . '.' . $file->extension
                ]
            ]);

        }else{

            return response()->json([
                'status' => '2',
                'message' => 'Tipo de archivo no permitido'
                ]);
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
