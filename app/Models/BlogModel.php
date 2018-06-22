<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blog_post';

    public function user()
    {
      return $this->belongsTo('User');
      
    }
}
