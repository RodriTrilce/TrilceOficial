<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest as BlogCreateRequest;
use App\Models\Post;
use Purifier;

class BlogController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
      return view('admin.blog.create')->with(['mode' => 'new']);
    }

    public function store(Request $request)
    {

      $request->validated();

      $post = new Post;
      $post->file_id  = 1;
      $post->site     = $request->site;
      $post->title    = $request->title;
      $post->content  = Purifier::clean($request->content);
      $post->slug     = str_slug($request->title);

      if($request->marker) $post->marker = $request->marker;
      if($request->visible) $post->visible = $request->visible;

      $post->save();

      return view('admin.blog.create')->with(['mode' => 'successful', 'data' => $post]);
    }

    public function show()
    {

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
