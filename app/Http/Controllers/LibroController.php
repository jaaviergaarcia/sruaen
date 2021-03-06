<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;

use App\Libro;

class LibroController extends Controller {

	public function nuevo_libro(){
		return view('admin.libro'); //este regresa a la vista que se encuentra en la carpeta resources\layouts

	}

	public function guardar_libro(Request $request){ //esta funcion manda mendiate la variable $request el texto que se encuentre en el diseño de la vista en la propiedad name

		$libro= new Libro;

		$libro->fecha_pub=$request->input('fecha_pub');
		$libro->tipo_libro=$request->input('tipo_libro');
		$libro->autor=$request->input('autor');
		$libro->titulo_libro=$request->input('titulo_libro');
		$libro->editorial=$request->input('editorial');
		$libro->total_autores=$request->input('total_autores');
		$libro->pos_autor=$request->input('pos_autor');
		$libro->lista=$request->input('lista');
		$libro->isbn=$request->input('isbn');
		

		if ($libro->save()) 
		{ 
			Session::flash('message','El Libro "'.$libro->titulo_libro.'" fue dado de alta correctamente.');
			Session::flash('class','success');

		} else {

			Session::flash('message','El Libro "'.$libro->titulo_libro.'" no fue guardado correctamente, verifque los datos nuevamente.');
			Session::flash('class','danger');
			
		}
		
		return redirect('libros');
	}

	public function libros(){

		$libros =  Libro::All();
		return view('consultas_libros.ver_libros',compact('libros'));		

	}

	public function editar_libro($id){

		$libro = Libro::find($id);
		return view('consultas_libros.editar_libros',compact('libro'));

	}

	public function actualizar_libro($id, Request $request)
	{
		$libro = Libro::find($id);

		$libro->fecha_pub=$request->input('fecha_pub');
		$libro->tipo_libro=$request->input('tipo_libro');
		$libro->autor=$request->input('autor');
		$libro->titulo_libro=$request->input('titulo_libro');
		$libro->editorial=$request->input('editorial');
		$libro->total_autores=$request->input('total_autores');
		$libro->pos_autor=$request->input('pos_autor');
		$libro->lista=$request->input('lista');
		$libro->isbn=$request->input('isbn');

		if ($libro->save()) 
		{ 
			Session::flash('message','El Libro "'.$libro->titulo_libro.'" fue dado de alta correctamente.');
			Session::flash('class','success');
		} else {
			Session::flash('message','El Libro "'.$libro->titulo_libro.'" no fue guardado correctamente, verifque los datos nuevamente.');
			Session::flash('class','danger');
			
		}		
		return redirect('libros');
	}

	public function eliminar_libro($id, Request $request){

		$libro = Libro::find($id);

		if($libro->delete()){
			Session::flash('message','El libro "'.$libro->titulo_libro.'" fue eliminado correctamente.');
			Session::flash('class','success');
		} else {
			Session::flash('message','El libro "'.$libro->titulo_libro.'" no fue posible eliminarlo correctamente, vuelva a intentarlo si el problema persiste pongase en contacto con su administrador.');
			Session::flash('class','danger');
		}

		return redirect('libros');

	}

}