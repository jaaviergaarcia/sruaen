<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Distincion;

class DistincionController extends Controller {

	public function nueva_distincion(){
		return view('admin.distincion');
	}

	public function guardar_distincion(Request $request){

		$distincion= new Distincion;

		$distincion->fecha= $request->input('fecha');
		$distincion->nombre_prof= $request->input('nombre_prof');
		$distincion->distincion= $request->input('distincion');
		$distincion->institucion= $request->input('institucion');
		$distincion->pais= $request->input('pais');
		$distincion->descripcion= $request->input('descripcion');

		$distincion->save();

		return redirect('nueva_distincion');


	}

}
