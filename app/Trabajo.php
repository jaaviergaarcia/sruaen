<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model {

	public function profesor()
	{
		return $this->belongsTo('App\Profesor','profesor_id');
	}

}
