<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Distincion;

class DistincionController extends Controller {

	public function nueva_distincion(){
		return view('admin.distincion');
	}

	public function guardar_distincion(Request $request)
	{

		$distincion= new Distincion;

		$distincion->fecha = $request->input('fecha');
		$distincion->nombre_prof = $request->input('nombre_prof');
		$distincion->distincion = $request->input('distincion');
		$distincion->institucion = $request->input('institucion');
		$distincion->pais = $request->input('pais');
		$distincion->descripcion = $request->input('descripcion');

		 if($distincion->save())
		 {
		 	Session::flash('message','La distición fue almacenada correctamente');
		 } else {
		 	Session::flash('message','Se produjo un error al tratar de almanenar el premio vuelva a intentarlo nuevamente, o pongase en contacto con su equipo de soporte');
		 }

		return redirect('distinciones');
	}

	public function distinciones()
	{
		$premios = Distincion::All();
		return view('consultas_resenias.ver_resenias',compact('premios'));
	}

}
