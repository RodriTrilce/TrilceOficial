<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class BannersModel extends Model
{
  protected $table = 'banners';

  public function file()
  {
    return $this->hasOne('App\Models\File', 'id', 'file_id');
  }
}
