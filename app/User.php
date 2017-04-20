<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	/*
	=============================================================
	|___________________________________________________________|
	|															|
	=============================================================
	*/

	
	//uno a muchos
	public function desarrollos()
	{
		return $this->hasMany('App\Desarrollo','user_id');
	}

	public function patentes()
	{
		return $this->hasMany('App\Patente','user_id');
	}

	public function trabajos()
	{
		return $this->hasMany('App\Trabajo','user_id');
	}

	public function tutorias()
	{
		return $this->hasMany('App\Tutoria','user_id');
	}

	//Muchos a Muchos

	public function libros()
    {
        return $this->belongsToMany('App\Libro', 'Libro_users', 'user_id', 'libro_id');
    }

    public function articulos()
    {

      	return $this->belongsToMany('App\Articulo', 'Articulo_users','user_id', 'articulo_id');
    }

    public function informes(){
    	return $this->belongsToMany('App\Informe', 'Informe_users', 'user_id', 'informe_id');
    }

    public function distinciones()
	{
		return $this->belongsToMany('App\Distincion', 'Distincion_users', 'user_id', 'distincion_id');
	}

	public function resenias()
	{
		return $this->belongsToMany('App\Resenia', 'Resenia_users', 'user_id', 'resenia_id');
	}

}
