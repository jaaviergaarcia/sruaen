<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Desarrollo;

class DesarrolloController extends Controller {

	public function nuevo_desarrollo(){
		return view('admin.desarrollo');
	}

	public function guardar_desarrollo(Request $request){

		$desarrollo = new Desarrollo;

		$desarrollo->fecha_pub = $request->input('fecha_pub');
		$desarrollo->tipo_des = $request->input('tipo_des');
		$desarrollo->autor = $request->input('autor');
		$desarrollo->nombre_des = $request->input('nombre_des');
		$desarrollo->tipo = $request->input('tipo');
		$desarrollo->sector = $request->input('sector');
		$desarrollo->pais = $request->input('pais');

		$desarrollo->save();

		return redirect ('nuevo_desarrollo');
		
	}

}
