<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerCreateRequest;
use App\Models\Admin\BannersModel as Banner;
use App\Models\File;
use \Mimey\MimeTypes as Mime;
use Storage;
use Image;


class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::where([
          ['type', '=', $_GET['type']],
          ['state', '=', '1']
        ])
        ->get();

        return view('admin/banners/index')
        ->with([
          'banners' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/banners/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerCreateRequest $request)
    {
      $request->validated();

      $banner = new Banner;

      $banner->title  = $request->title;
      $banner->link   = $request->link;
      $banner->type   = $request->type;
      $banner->state = '1';
      $banner->start = $request->start;
      $banner->expire = $request->expire;

      $file = $this->storeBannerImage($request);
      $banner->file_id = $file->id;

      $position = Banner::where([
        ['type', '=', $request->type],
        ['state', '=', '1']
      ])
      ->orderBy('position', 'desc')
      ->take(1)
      ->get();

      $banner->position = (!isset($position[0]->position)?0:$position[0]->position+1);

      $banner->save();

      return back()->with('success', 'Banner creado correctamente');
    }

    public function storeBannerImage($request)
    {
      $mime   = new Mime;
      $file   = new File;

      $file->token              = date("djo") . str_random(10);
      $file->type               = 'image';
      $file->mime               = $request->file('image')->getMimeType();
      $file->extension          = $mime->getExtension($request->file('image')->getMimeType());
      $file->location_folder    = 'static/images/banner';
      $file->name               = $request->title;
      $file->dimension          = '1920×500';
      $file->size               = $request->file('image')->getClientSize();
      $file->save();

      $imageSave    = Image::make($request->file('image'));

      Storage::put('public/' . $file->location_folder . '/' . $file->token. '.' . $file->extension, $imageSave->encode(null, 80));
      return $file;
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
