<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Redirect;
use App\Desarrollo;


class DesarrolloController extends Controller {

	public function nuevo_desarrollo(){
		return view('admin.desarrollo');
	}

	public function guardar_desarrollo(Request $request){

		$profesor_id = Session::get('id');
		//return $id;

		
		$desarrollo = new Desarrollo;

		$desarrollo->profesor_id = $profesor_id;
		$desarrollo->fecha_pub = $request->input('fecha_pub');
		$desarrollo->tipo_des = $request->input('tipo_des');
		$desarrollo->autor = $request->input('autor');
		$desarrollo->nombre_des = $request->input('nombre_des');
		$desarrollo->tipo = $request->input('tipo');
		$desarrollo->sector = $request->input('sector');
		$desarrollo->pais = $request->input('pais');

		if($desarrollo->save()) {
			Session::flash('message','El desarrollo "'.$desarrollo->nombre_des.'" fue guardado correctamente.');
			Session::flash('class','success');
		}else{
			Session::flash('message','El desarrollo "'.$desarrollo->nombre_des.'"" no fue guardado correctamente.');
			Session::flash('class','success');
		}

		return redirect ('desarrollos'); 
		
	}

	public function ver_desarrollos(){

		$desarrollos = Desarrollo::All();
		return view('consultas_desarrollos.ver_desarrollos',compact('desarrollos'));
	}

	public function editar_desarrollo($id, Request $request){
		$desarrollo = Desarrollo::find($id);
		return view('consultas_desarrollos.editar_desarrollos',compact('desarrollo'));

	}

	public function actualizar_desarrollo($id, Request $request){

		$desarrollo = Desarrollo::find($id);

		//$profesor_id = Session::get('id');
		//return $id;		
		//$desarrollo->profesor_id = $profesor_id;
		$desarrollo->fecha_pub = $request->input('fecha_pub');
		$desarrollo->tipo_des = $request->input('tipo_des');
		$desarrollo->autor = $request->input('autor');
		$desarrollo->nombre_des = $request->input('nombre_des');
		$desarrollo->tipo = $request->input('tipo');
		$desarrollo->sector = $request->input('sector');
		$desarrollo->pais = $request->input('pais');

		if($desarrollo->save()) {
			Session::flash('message','El desarrollo "'.$desarrollo->nombre_des.'" fue guardado correctamente.');
			Session::flash('class','success');
		}else{
			Session::flash('message','El desarrollo "'.$desarrollo->nombre_des.'"" no fue guardado correctamente.');
			Session::flash('class','success');
		}

		return redirect ('desarrollos'); 
	}

	public function eliminar_desarrollo($id, Request $request){
		$desarrollo = Desarrollo::find($id);

		if($desarrollo->delete()){
			Session::flash('message','El desarrollo "'.$desarrollo->nombre_des.'" fue eliminado correctamente.');
			Session::flash('class','success');
		}else{
			Session::flash('message','El desarrollo seleccionado no fue posible eliminarlo correctamente.');
			Session::flash('class','success');

		}

		return redirect ('desarrollos'); 

	}

}
