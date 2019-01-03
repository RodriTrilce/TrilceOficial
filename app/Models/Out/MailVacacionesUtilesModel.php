<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class MailVacacionesUtilesModel extends Model
{
    protected $table = '_mail_db_roma';
    protected $fillable = ['email', 'send1'];
}
