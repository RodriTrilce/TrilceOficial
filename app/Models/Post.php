<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
use App\Models\GalleryBlogModel;

class Post extends Model
{
  protected $table = 'posts';

  protected static function boot()
  {
      parent::boot();

      static::creating(function ($post) {
          if(is_null($post->user_id)) {
              $post->user_id = auth()->user()->id;
          }
      });
/*
      static::deleting(function ($post) {
          $post->comments()->delete();
          $post->tags()->detach();
      });
*/
  }

  /**
   * Return User information from post.
   * @var string $field
   * @var mixed $value
   * @return User
   * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If no model found.
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function blogGallery()
  {
    return $this->hasOne('App\Models\GalleryBlogModel');
  }

  public function blogFile()
  {
    return $this->hasOne('App\Models\File', 'id', 'file_id');
  }

  public function visits()
  {
    return visits($this);
  }

}
