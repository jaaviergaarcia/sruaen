<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;

use App\Articulo;

class ArticuloController extends Controller {



    public function nuevo_articulo(){

	    return view ('admin.articulo');
    }
    
	public function guardar_articulo(Request $request){

		$articulo = new Articulo;

		$articulo->fecha_pub = $request->input('fecha_pub');
		$articulo->tipo_art = $request->input('tipo_art');
		$articulo->autor = $request->input('autor');
		$articulo->titulo_art = $request->input('titulo_art');
		$articulo->revista = $request->input('revista');
		$articulo->principal = $request->input('principal');
		$articulo->autores = $request->input('autores');
		$articulo->pos_autor = $request->input('pos_autor');
		$articulo->lista_autor = $request->input('lista_autor');

		if ($articulo->save())  
		{
			Session::flash('message','El articulo ha sido guardado Correctamente');
			
		} else {
			Session::flash('message','Hubo un error al intentar guardar el articulo vuleva a intentarlo');
		
		}


		return redirect ('articulos');

	}

	public function articulos()
	{
		//declaro variable del tipo del Modelo el cual se le manda se recibe en los las plantillas blade	
		$articulos = Articulo::All();
		return view ('consultas_articulos.ver_articulos',compact('articulos'));
	}

	public function editar_articulos($id)
	{

		$articulo = Articulo::find($id);
		return view('consultas_articulos.editar_articulo', compact('articulo'));
	}

	public function actualizar_articulo($id, Request $request)
	{
		$articulo = Articulo::find($id);

		$articulo->fecha_pub = $request->input('fecha_pub');
		$articulo->tipo_art = $request->input('tipo_art');
		$articulo->autor = $request->input('autor');
		$articulo->titulo_art = $request->input('titulo_art');
		$articulo->revista = $request->input('revista');
		$articulo->principal = $request->input('principal');
		$articulo->autores = $request->input('autores');
		$articulo->pos_autor = $request->input('pos_autor');
		$articulo->lista_autor = $request->input('lista_autor');

		if ($articulo->save())
		{
			Session::flash('message','El articulo ha sido guardado Correctamente');
			
		} else {
			Session::flash('message','Hubo un error al intentar guardar el usuario vuleva a intentarlo');
		
		}

		return redirect('articulos');


	}

	public function eliminar_articulo($id, Request $request)
	{
		$articulo = Articulo::find($id);

		if ($articulo -> delete())
		{
			//mostrar mensajes
			Session::flash('message','El Articulo dado de alta con el nombre de "'.$articulo->titulo_art.'" ha sido elimnado.');
		} else{
			Session::flash('message','El  Articulo dado de alta con el nombre de "'.$articulo->titulo_art.'" no ha sido posible eliminarlo.');
		}

		return redirect ('articulos');
	}



}