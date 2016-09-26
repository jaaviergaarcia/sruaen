<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model {

	public function profesores()
	{
		return $this->belongsToMany('App\Profesor', 'Informe_profesors', 'informe_id', 'profesor_id');
	}

}
