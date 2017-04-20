<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resenia extends Model {

	public function usuarios()
	{
		return $this->belongsToMany('App\User', 'Resenia_users', 'resenia_id', 'user_id');
	}
}
