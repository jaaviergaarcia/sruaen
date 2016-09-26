<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {

	//
	public function profesores()
	{
		return $this->belongsToMany('App\Profesor', 'Articulo_profesors', 'articulo_id', 'profesor_id');
	}

}
