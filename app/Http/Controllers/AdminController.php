<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function admin(){
		return view('admin.index');
	}

	public function articulo(){
		return view('admin.articulo');
	}

	public function usuario(){
		return view('admin.user');
	}

	public function libro(){
		return view('admin.libro');
	}

	public function informe(){
		return view('admin.informe');
	}

	public function distincion(){
		return view ('admin.distincion');
	}

	public function desarrollo(){
		return view ('admin.desarrollo');
	}

	public function resena(){
		return view ('admin.resenia');
	}

	public function patente(){
		return view('admin.patente');
	}

	public function trabajo(){
		return view('admin.trabajo');
	}

	public function ver_articulo(){
		return view('consultas.ver_articulo');
	}
}