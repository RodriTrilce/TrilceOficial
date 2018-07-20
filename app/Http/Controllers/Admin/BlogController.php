<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest as BlogCreateRequest;
use App\Models\GalleryBlogModel as Gallery;
use App\Models\Post;
use \Mimey\MimeTypes as Mime;
use Purifier;
use Storage;
use Image;

class BlogController extends Controller
{

    public function index()
    {
      $data = Post::where('type', 'blog')->get();
      return view('admin.blog.index')->with(['data' => $data]);
    }

    public function create()
    {
      return view('admin.blog.create')->with(['mode' => 'new']);
    }

    public function store(BlogCreateRequest $request)
    {
      $request->validated();
      $post = new Post;
      $post->file_id  = 0;
      $post->site     = $request->site;
      $post->title    = $request->title;
      $post->content  = Purifier::clean($request->content);
      $post->slug     = str_slug($request->title);

      if($request->visible) $post->visible  = $request->visible;
      if($request->marker)  $post->marker   = $request->marker;

      $post->created_at = $request->created_at;
      $post->approved = '1';
      $post->save();

      $gallery = new Gallery;
      $gallery->post_id = $post->id;
      $gallery->save();

      if($request->file('image')){
        foreach ($request->file('image') as $image) {
          $token       = str_random(16);
          $imageReturn = $this->storeImage($image, $token, $gallery, '900x650');

          $this->storeImage($image, $token, $gallery, '290x290');

          if($image->getClientOriginalName() == $request->markerimage)
          {
            $post->file_id = $imageReturn->id;
            $post->save();
          }
        }
      }
      return back()->with('success', 'Post creado correctamente');
    }

    public function storeImage($image, $token, $gallery, $dimension)
    {
      $mime         = new Mime;
      $imageSave    = Image::make($image);

      $token        = $gallery->post_id . '_' . $token;
      $tokenSave    = $token . '_' . $dimension;
      $extension    = $mime->getExtension($image->getMimeType());
      $dimensionCut = explode('x', $dimension);


      if($dimension == '290x290')
        $imageSave->fit($dimensionCut[0], $dimensionCut[1]);
      else
        $imageSave->resize($dimensionCut[0], $dimensionCut[1]);

      Storage::put('public/static/images/blog/' . $tokenSave . '.' . $extension, $imageSave->encode(null, 80));

      if($dimension == '900x650')
      {
        return $gallery->images()->create([
          'token'           => $token,
          'type'            => 'image',
          'mime'            => $image->getMimeType(),
          'extension'       => $extension,
          'location_folder' => 'static/images/blog',
          'name'            => 'none',
          'size'            => $image->getClientSize(),
          'dimension'       => $dimension
        ]);
      }

      return true;
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}
