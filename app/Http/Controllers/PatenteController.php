<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Redirect;
use App\Patente;

class PatenteController extends Controller {

	public function nuevo_patente(){
		return view ('admin.patente');
	}

	public function guardar_patente(Request $request){

		$profesor_id = Session::get('id');
		//echo "$prosefor_id"; 
		//$patente = new Patente;

		$patente = new Patente;

		$patente->profesor_id = $profesor_id;
		$patente->fecha_pub = $request->input('fecha_pub');
		$patente->trabajos = $request->input('trabajos');
		$patente->autor_pat = $request->input('autor_pat');
		$patente->tit_trabajo = $request->input('tit_trabajo');
		$patente->tipo_par = $request->input('tipo_par');
		$patente->tipo_pat = $request->input('tipo_pat');
		$patente->edo_pat = $request->input('edo_pat');

		if($patente->save()){
			Session::flash('message','La patente fue guardada correctamente');
			Session::flash('class','success');

		}else{
			Session::flash('message','La patente no fue guardada correctamente');
			Session::flash('class','success');
		}

		return redirect('patentes');

	}

	public function ver_patentes(){

		$patentes = Patente::All();
		return view('consultas_patentes.ver_patentes',compact('patentes'));
	}

}
