<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patente extends Model {

	public function usuario()
	{
		return $this->belongsTo('App\Profesor','user_id');
	}

}
