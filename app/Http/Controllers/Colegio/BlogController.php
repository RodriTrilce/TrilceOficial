<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Events\PostViewed;

class BlogController extends Controller
{
  protected $typePost;
  protected $site;

  public function __construct()
  {
    $this->typePost = 'blog';
    $this->site     = 'colegio';
  }

  public function index()
  {
    $posts = Post::where([
      ['type', '=', $this->typePost],
      ['site', '=', $this->site],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
      ['marker', '=', '0']
    ])->paginate(10);

    $markers = Post::where([
      ['type', '=', $this->typePost],
      ['site', '=', $this->site],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
      ['marker' , '=', '1']
    ])
    ->take(4)
    ->get();

    return view('/colegio/blog')->with([
                                        'posts'         => $posts,
                                        'markers'  => $markers
                                      ]);
  }

  public function post($post)
  {
    $post = Post::where('slug', $post)->firstOrFail();

    //\Event::fire(new PostViewed($post));
    if($post->visible) {
      $post->visits()->increment();

      $related = Post::inRandomOrder()
      ->where([
        ['type', '=', $this->typePost],
        ['site', '=', $this->site],
        ['id', '<>', $post->id],
        ['visible', '1'],
        ['approved', '=', '1'],
      ])
      ->take(4)
      ->get();

      return view('/colegio/blog_post')->with([
        'post'      => $post,
        'related'   => $related
      ]);

    } else {
      return abort(404);
    }

  }
}













//
