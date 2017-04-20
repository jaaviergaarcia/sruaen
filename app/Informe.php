<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model {

	public function usuarios()
	{
		return $this->belongsToMany('App\User', 'Informe_users', 'informe_id', 'user_id');
	}

}
