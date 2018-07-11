<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $table = 'files';

  protected $fillable = [
    'token',
    'type',
    'mime',
    'extension',
    'location_folder',
    'location_driver',
    'name',
    'description',
    'size',
    'dimension',
    'trash'
  ];

  public function filesable()
  {
    return $this->morphTo();
  }
}
