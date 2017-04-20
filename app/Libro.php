<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model {

	public function usuarios()
    {
        return $this->belongsToMany('App\User', 'Libro_users', 'libro_id', 'user_id');
    }

}
