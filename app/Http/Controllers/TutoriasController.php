<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Tutoria;

class TutoriasController extends Controller {

	public function nueva_tutoria(){
		return view ('admin.tutoria');
	}

	
}
