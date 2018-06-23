<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
  public function index()
  {
    // $posts_all = Post::where([
    //   ['site', '=', 'colegio'],
    //   ['type', '=', 'blog'],
    //   ['visible', '=', '1'],
    //   ['approved', '=', '1'],
    //   ['marker', '=', '0']
    // ])->paginate(10);

    $a = Post::find(1);

    dd($a->user);


//    dd($posts_all);
/*
    $posts_marker = Post::where([
      ['category', '=', 'colegio'],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
      ['marker' , '=', '1']
    ])->limit(1)->get();



    return view('/colegio/blog')->with([
                                        'posts'         => $posts_all,
                                        'posts_marker'  => $posts_marker
                                      ]);
   */

  }

  public function post($id, $post)
  {
    return view('/colegio/blog_post');
  }
}
