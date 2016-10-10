<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
Use App\Profesor;
use Session;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller {

	//manda llamar la vista para entrar
	public function mostrarinicio_sesion(){

		return view('inicio-sesion');
	}

	

	public function entrar(Request $request)
	{
        //variable           //campo_basedatos                                            
		$email = ($request->input('email'));
		$pass = ($request->input('pass'));

        //obj tipo profesor
		$profesors = Profesor::all();

        //@foreach    @endforeach y se eliminan los {}
		foreach ($profesors as $profesor) 
		{

			if(($profesor->email==$email) && ($profesor->pass==$pass)) 
			{

				Session::put('id',$profesor->id);
				Session::put('nombre',$profesor->nombre_prof);
				Session::put('tipo',$profesor->tipo);


				switch ($profesor->tipo) {
					case 'A':
						return redirect('ver_usuarios');
						break;
					
					case 'C':
						return redirect('admin');
						break;
				}


				//@if    @endif y se eliminan los {}
				 /*if ($profesor->tipo =='A') 
				{
					//Si entra a esta vista el usuario que entro es un administrador
					return redirect('ver_usuarios');

				}//segundo if */

			}//primer if
			
		}//end foreach

		//Sesion::flash sirve para enviar/mostrar mensajes 

	Session::flash('message','Correo o contraseña incorrecto, verique que sus datos sean correctos.');
	Session::flash('class','danger');
	return redirect('/');


	} //end function entrar

	public function logout()
	{
		Session::flush();
		return redirect ('/');
	}

}
