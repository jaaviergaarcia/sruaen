<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
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

		if ($informe->save())
		{
			Session::flash('message','El informe ha sido guardado correctamente');
			Session::flash('class','success');
		} else {
			Session::flash('message','Hubo un error al intentar guardar el informe, intentelo nuevamente, si el problema continua contacte al equipo de soporte.');
			Session::flash('class','danger');
		}

		return redirect('informes');  // esta ruta corresponde a la function del mismo nombre pues en su return el valor es la vista cargada del sistema
	} 

	public function informes()
	{
		$informes = Informe::All();
		return view('consultas_informes.ver_informes',compact('informes'));
	} 

	public function editar_informe($id)
	{
		$informe = Informe::find($id);
		return view('consultas_informes.editar_informe',compact('informe'));

	}

	public function actualizar_informe($id, Request $request)
	{
		$informe = Informe::find($id);

		$informe->fecha_pub = $request->input('fecha_pub');
		$informe->autor = $request->input('autor');
		$informe->titulo_info = $request->input('titulo_info');
		$informe->institucion = $request->input('institucion');
		$informe->autor_princ = $request->input('autor_princ');
		$informe->varios_autores = $request->input('varios_autores');
		$informe->pos_autor = $request->input('pos_autor');
		$informe->lista_autor = $request->input('lista_autor');

		if ($informe->save())
		{
			Session::flash('mesagge','El informe "'.$informe->titulo_info.'" ha sido actualizado correctamente');
			Session::flash('class','success');
		} else {
			Session::flash('message','Hubo un error al intentar actualizar el informe, intentelo nuevamente, si el problema continua contacte al equipo de soporte.');
			Session::flash('class','danger');
		}
		return redirect('informes');
	}

	public function eliminar_informe($id, Request $request)
	{
		$informe = Informe::find($id);
		if($informe->delete())
		{
			Session::flash('mesagge','El informe "'.$informe->titulo_info.'" fue eliminado correctamente');
			Session::flash('class','success');
		} else{
			Session::flash('message','El informe "'.$informe->titulo_info.'" no fue posible eliminarlo, intentelo nuevamente, si el problema persiste contacte al equipo de soporte');
			Session::flash('class','danger');
		}

		return redirect('informes');
	}
}