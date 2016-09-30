<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Resenia;

class ReseniaController extends Controller {

	public function nueva_resenia()
	{
		return view('admin.resenia');
	}

	public function guardar_resenia(Request $request)
	{
		$resenia = new Resenia;

		$resenia->fecha_pub = $request->input('fecha_pub');
		$resenia->resenias = $request->input('resenias');
		$resenia->autor_res = $request->input('autor_res');
		$resenia->tit_res = $request->input('tit_res');
		$resenia->tit_obra = $request->input('tit_obra');
		$resenia->pais = $request->input('pais');
		$resenia->autor_princ = $request->input('autor_princ');
		$resenia->varios_aut = $request->input('varios_aut');
		$resenia->pos_autor = $request->input('pos_autor');
		$resenia->lista_autor = $request->input('lista_autor');

		if ($resenia-> save())
		{
			Session::flash('message','Reseña guardada correctamente');
		} else {
			Session::flash('message','Hubo un problema al intentar guardar la resenia intentelo de nuevo si el problema persiste pongase en contacto con su administrador');
		}

		return redirect ('resenias');

	}

	public function resenias()
	{
		$resenias = Resenia::All();
		return view('consultas_resenias.ver_resenias',compact('resenias'));
	}

	public function editar_resenias($id)
	{
		$resenia = Resenia::find($id);
		return view ('consultas_resenias.editar_resenias',compact('resenia'));

	}

	

}
