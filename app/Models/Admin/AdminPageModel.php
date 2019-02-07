<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminPageModel extends Model
{
	protected $table = 'role_adminpage';

	public function roles()
	{
	  return $this
	      ->belongsTo('App\Role')
	      ->withTimestamps();
	}

}
