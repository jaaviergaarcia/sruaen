<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {


	//uno a muchos
	public function desarrollos()
	{
		return $this->hasMany('App\Desarrollo','profesor_id');
	}

	public function patentes()
	{
		return $this->hasMany('App\Patente','profesor_id');
	}

	public function trabajos()
	{
		return $this->hasMany('App\Trabajo','profesor_id');
	}

	public function tutorias()
	{
		return $this->hasMany('App\Tutoria','profesor_id');
	}

	//Muchos a Muchos

	public function libros()
    {
        return $this->belongsToMany('App\Libro', 'Libro_profesors', 'profesor_id', 'libro_id');
    }

    public function articulos()
    {

      	return $this->belongsToMany('App\Articulo', 'Articulo_profesors','profesor_id', 'articulo_id');
    }

    public function informes(){
    	return $this->belongsToMany('App\Informe', 'Informe_profesors', 'profesor_id', 'informe_id');
    }

    public function distinciones()
	{
		return $this->belongsToMany('App\Distincion', 'Distincion_profesors', 'profesor_id', 'distincion_id');
	}

	public function resenias()
	{
		return $this->belongsToMany('App\Resenia', 'Profesor_resenias', 'profesor_id', 'resenia_id');
	}



}
