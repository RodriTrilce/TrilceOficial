<?php

namespace App\Models;
use App\User;
use App\Models\File;

use Illuminate\Database\Eloquent\Model;

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
    return $this->belongsTo('User');
  }



/*
  public function getMarkerImage()
  {
    return $this->hasOne('File');
  }*/
}
