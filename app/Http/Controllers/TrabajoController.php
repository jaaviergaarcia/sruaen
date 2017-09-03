<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Trabajo;
use Session;


class TrabajoController extends Controller {

	public function nuevo_trabajo(){
		return view('admin.trabajo');
	}

	public function guardar_trabajo(Request $request){

		$user_id = Session::get('id');

		$trabajo = new Trabajo;

		$trabajo->user_id = $user_id;
		$trabajo->fecha_pub = $request->input('fecha_pub');
		$trabajo->tipo_trab = $request->input('tipo_trab');
		$trabajo->autor = $request->input('autor');
		$trabajo->titulo_trab = $request->input('titulo_trab');
		$trabajo->lugar_evento = $request->input('lugar_evento');
		$trabajo->entidad_evento = $request->input('entidad_evento');

		if($trabajo->save()){
			Session::flash('message','El trabajo fue registrado correctamente');
			Session::flash('class','success');

		}else{
			Session::flash('message','El trabajo no fue registrado correctamente');
			Session::flash('class','danger');

		}

		return redirect('trabajos');

	}

	public function ver_trabajos(){
		$trabajos = Trabajo::All();
		return view('consultas_trabajos.ver_trabajos',compact('trabajos'));
	}

	public function editar_trabajo($id){

		$trabajo = Trabajo::find($id);
		return view('consultas_trabajos.editar_trabajos',compact('trabajo'));

	}

	public function actualizar_trabajo($id, Request $request){

		$trabajo = Trabajo::find($id);

		//$trabajo->profesor_id = $profesor_id;
		$trabajo->fecha_pub = $request->input('fecha_pub');
		$trabajo->tipo_trab = $request->input('tipo_trab');
		$trabajo->autor = $request->input('autor');
		$trabajo->titulo_trab = $request->input('titulo_trab');
		$trabajo->lugar_evento = $request->input('lugar_evento');
		$trabajo->entidad_evento = $request->input('entidad_evento');

		if($trabajo->save()){
			Session::flash('message','El trabajo fue actualizado correctamente');
			Session::flash('class','success');

		}else{
			Session::flash('message','El trabajo no fue actualizado correctamente');
			Session::flash('class','danger');

		}

		return redirect('trabajos');

	}

	public function eliminar_trabajo($id, Request $request){

		$trabajo = Trabajo::find($id);

		if($trabajo->delete()){
			Session::flash('message','El trabajo fue actualizado correctamente');
			Session::flash('class','success');

		}else{
			Session::flash('message','El trabajo no fue actualizado correctamente');
			Session::flash('class','danger');

		}

		return redirect('trabajos');


	}

}
