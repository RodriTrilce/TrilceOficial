<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class MailVacacionesUtilesModel extends Model
{
    protected $table = '_mail_db_los_olivos';
    protected $fillable = ['email', 'send1'];
}
