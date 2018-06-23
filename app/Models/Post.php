<?php

namespace App\Models;
use App\User;
use App\Models\File;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function getMarkerImage()
  {
    return $this->hasOne('File');
  }
}
