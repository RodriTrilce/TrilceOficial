<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
  public function index()
  {
    return view('/colegio/blog');
  }
  
  public function post($id, $post)
  {
    return view('/colegio/blog_post');
  }
}
