<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogModel as Blog;

class BlogController extends Controller
{
  public function index()
  {
    $posts_all = Blog::where([
      ['category', '=', 'colegio'],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
      ['marker', '=', '0']
    ])->paginate(4);

    $posts_marker = Blog::where([
      ['category', '=', 'colegio'],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
      ['marker' , '=', '1']
    ])->limit(1)->get();



    return view('/colegio/blog')->with([
                                        'posts'         => $posts_all,
                                        'posts_marker'  => $posts_marker
                                      ]);
  }

  public function post($id, $post)
  {
    return view('/colegio/blog_post');
  }
}
