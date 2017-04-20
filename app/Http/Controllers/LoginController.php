<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
Use App\User;
use Session;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller {

/*
     public function __construct()
    {
        $this->middleware('auth');
    } */

	//manda llamar la vista para entrar
	public function mostrarinicio_sesion(){
		return view('inicio-sesion');
	}


	public function entrar(Request $request)
	{
        //variable           //campo_basedatos                                            
		$email = strtolower(($request->input('email')));
		$password = ($request->input('password'));

        //obj tipo profesor
        $users = User::all();
		
        //@foreach    @endforeach y se eliminan los {}
		foreach ($users as $user) 
		{	
			//@if    @endif y se eliminan los {}
			if(($user->email==$email) and ($user->password==$password)) 
			{
				Session::put('id',$user->id);
				Session::put('nombre',$user->nombre_prof);
				Session::put('tipo',$user->tipo);

				switch ($user->tipo) {
					case 'A':
						return redirect('ver_usuarios');
						break;
					
					case 'C':
						return redirect('Principal');
						break;
				}//end switch
			}//end if			
		}//end foreach

		//Sesion::flash sirve para enviar/mostrar mensajes 
	Session::flash('message','Correo o contraseña incorrectos, verique sus datos.');
	Session::flash('class','danger');
	return redirect('/');
	} //end function entrar
	
	public function logout()
	{
		Session::flush();
		return redirect ('iniciar_sesion');
	}

}
