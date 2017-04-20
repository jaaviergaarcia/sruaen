<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Distincion extends Model {

	public function usuarios()
	{
		return $this->belongsToMany('App\User', 'Distincion_users', 'distincion_id', 'user_id');
	}

}
