<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Informe;

class InformeController extends Controller {

	public function nuevo_informe(){
		return view('admin.informe');
	}

	public function guardar_informe(Request $request){

		$informe = new Informe;

		$informe->fecha_pub= $request->input('fecha_pub');
		$informe->autor= $request->input('autor');
		$informe->titulo_info= $request->input('titulo_info');
		$informe->institucion= $request->input('institucion');
		$informe->autor_princ= $request->input('autor_princ');
		$informe->varios_autores= $request->input('varios_autores');
		$informe->pos_autor= $request->input('pos_autor');
		$informe->lista_autor= $request->input('lista_autor');

		$informe->save();

		return redirect('nuevo_informe');
	}


}