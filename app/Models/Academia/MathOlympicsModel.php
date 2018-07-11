<?php
namespace App\Models\Academia;

use Illuminate\Database\Eloquent\Model;

class MathOlympicsModel extends Model
{
  protected $table = 'academia_math_olympics';
  protected $fillable = [
    'type',
    'venue',
    'title',
    'grade',
    'base_url',
    'inscription_url',
    'inscription_group_url',
    'finish_at'
  ];

  public function results()
  {
    return $this->morphMany('App\Models\File', 'filesable');
  }

}
