<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {

	//
	public function usuarios()
	{
		return $this->belongsToMany('App\User', 'Articulo_users', 'articulo_id', 'user_id');
	}

}
