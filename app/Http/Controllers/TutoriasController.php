<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Tutoria;
use Session;

class TutoriasController extends Controller {

	public function nueva_tutoria(){
		return view ('admin.tutoria');
	}

	public function guardar_tutoria(Request $request){
		$profesor_id = Session::get('id');

		$tutoria = new Tutoria;
		$tutoria->profesor_id = $profesor_id;
		$tutoria->nombre_alum  = $request->input('nombre_alum');
		$tutoria->fecha_in =$request->input('fecha_in');
		$tutoria->institucion_alum = $request->input('institucion_alum');
		$tutoria->nombre_prof = $request->input('nombre_prof');
		$tutoria->institucion_prof = $request->input('institucion_prof');

		if($tutoria->save()){
			Session::flash('messager','La tutoria fue asignada correctamente');
			Session::flash('class','success');
		} else{
			Session::flash('messager','La tutoria no fue asignada correctamente');
			Session::flash('class','danger');
		}
		return redirect('tutorias');

	}

	public function ver_tutorias(){

		$tutorias = Tutoria::All();
		return view ('consultas_tutorias.ver_tutorias',compact('tutorias'));

	}

	public function editar_tutoria($id){

		$tutoria = Tutoria::find($id);
		return view ('consultas_tutorias.editar_tutorias', compact('tutoria'));
	}

	public function actualizar_tutoria($id, Request $request){
		$tutoria = Tutoria::find($id);


		//$tutoria->profesor_id = $profesor_id;
		$tutoria->nombre_alum  = $request->input('nombre_alum');
		$tutoria->fecha_in =$request->input('fecha_in');
		$tutoria->institucion_alum = $request->input('institucion_alum');
		$tutoria->nombre_prof = $request->input('nombre_prof');
		$tutoria->institucion_prof = $request->input('institucion_prof');

		if($tutoria->save()){
			Session::flash('messager','La tutoria fue asignada correctamente');
			Session::flash('class','success');
		} else{
			Session::flash('messager','La tutoria no fue asignada correctamente');
			Session::flash('class','danger');
		}
		return redirect('tutorias');

	}

	public function eliminar_tutoria($id, Request $request){
		$tutoria = Tutoria::find($id);

		if($tutoria->delete()){
         Session::flash('messager','La tutoria fue eliminada correctamente');
			Session::flash('class','success');
		} else{
			Session::flash('messager','La tutoria no fue eliminada correctamente');
			Session::flash('class','danger');
		}
	}

	
}
