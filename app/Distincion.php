<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Distincion extends Model {

	public function profesores()
	{
		return $this->belongsToMany('App\Profesor', 'Distincion_profesors', 'distincion_id', 'profesor_id');
	}

}
