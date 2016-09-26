<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resenia extends Model {

	public function profesores()
	{
		return $this->belongsToMany('App\Profesor', 'Profesor_resenias', 'resenia_id', 'profesor_id');
	}
}
