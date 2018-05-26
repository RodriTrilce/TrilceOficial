<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogModel as Blog;

class BlogController extends Controller
{
  public function index()
  {
    $posts = Blog::where('category', 'colegio')
                  ->paginate(10);
    
    return view('/colegio/blog')->with([
                                        'posts' => $posts
                                      ]);
  }
  
  public function post($id, $post)
  {
    return view('/colegio/blog_post');
  }
}
