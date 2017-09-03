<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Redirect;

use App\User;

class ProfesorController extends Controller {


	public function nuevo_profesor(){
		return view('admin.user');

	}

	public function guardar_profesor(Request $request){

		$profesor = new User;



		//variable propiedad name            campo de la BD
		//declaracion de variables que se mandan a la base
		$profesor->name = $request->input('name');
		//$profesor->lastname = $request->input('lastname');
		$profesor->email = strtolower($request->input('email'));
		$profesor->password = $request->input('password');
		$profesor->tipo= $request->input('tipo');
		$profesor->gpo_lab = $request->input('gpo_lab');
		$profesor->rel_lab = $request->input('rel_lab');
		$profesor->categoria = $request->input('categoria');
		$profesor->tipo_prof = $request->input('tipo_prof');
		$profesor->grad_acad = $request->input('grad_acad');
		$profesor->est_acad = $request->input('est_acad');
		$profesor->cuerpo_acad = $request->input('cuerpo_acad');
		$profesor->lgac = $request->input('lgac');


		$password = $request->input('password');
		$passConfirmar = $request->input('passConfirmar');


		if($password == $passConfirmar)
		{
			if ($profesor->save())
			{
				Session::flash('message','Usuario"'.$profesor->name.'" ha sido guardado Correctamente');
				Session::flash('class','success');				
			} else{
				Session::flash('message','Hubo un error al intentar guardar el usuario"'.$profesor->name.'" vuleva a intentarlo');
				Session::flash('class','danger');			
			}

		} else {

			Session::flash('message','Sus contraseñas no son iguales, verifique que sean iguales e intentelo nuevamente si el error persiste contacte a su administrador');
			Session::flash('class','danger');

			return redirect('nuevo_profesor');
		}
		

		return redirect ('ver_usuarios');
    }


	public function ver_usuarios()
	{
		//declaro variable del tipo del Modelo el cual se le manda se recibe en los las plantillas blade	
		$profesors = User::All();
		return view ('consultas_user.ver_usuarios',compact('profesors'));
	}


	public function editar_usuario($id)
	{

		$profesor = User::find($id);
		return view('consultas_user.editar_usuarios',compact('profesor')); 
	}


	public function actualizar_usuario($id, Request $request)
	{
		$profesor = User::find($id);
		//$profesor-> fill($request->All());

		//variable propiedad name            campo de la BD
		//declaracion de variables que se mandan a la base
		$profesor->nombre_prof = $request->input('nombre_prof');
		$profesor->lastname = $request->input('lastname');
		$profesor->email = $request->input('email');
		$profesor->pass = $request->input('pass');
		$profesor->tipo= $request->input('tipo');
		$profesor->gpo_lab = $request->input('gpo_lab');
		$profesor->rel_lab = $request->input('rel_lab');
		$profesor->categoria = $request->input('categoria');
		$profesor->tipo_prof = $request->input('tipo_prof');
		$profesor->grad_acad = $request->input('grad_acad');
		$profesor->est_acad = $request->input('est_acad');
		$profesor->cuerpo_acad = $request->input('cuerpo_acad');
		$profesor->lgac = $request->input('lgac');

		if ($profesor->save())
		{
			//mostrar mensajes
			Session::flash('message','Usuario "'.$profesor->nombre_prof.'" actilizado Correctamente');
			Session::flash('class','success');
		} else{

			Session::flash('message','Hubo un error al intentar actualizar el usuario"'.$profesor->nombre_prof.'" vuleva a intentarlo');
			Session::flash('class','danger');
		
		}

		return redirect ('ver_usuarios');
	}

	public function eliminar_usuario($id, Request $request)
	{
		$profesor = User::find($id);		
		if ($profesor -> delete())
		{
			//mostrar mensajes
			Session::flash('message','El usuario/profesor"'.$profesor->nombre_prof.'" ha sido elimnado.');
			Session::flash('class','success');
		} else{
			Session::flash('message','El usuario/profesor"'.$profesor->nombre_prof.'" no ha sido posible eliminarlo.');
			Session::flash('class','danger');
		}

		return redirect ('ver_usuarios');
	}



	public function setPasswordAttribute($valor)
	{
		if(!empty($valor))
		{
			$this->attributes['pass'] = \hash::make($valor); 
		} 

	}

}