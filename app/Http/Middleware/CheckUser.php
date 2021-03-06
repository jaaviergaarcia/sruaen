<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;
//php artisan make:middleware CheckUser
/*
	Verifica el tipo de usuario que se intenta loguear,
	funciona como una validación antes de realizar la peticion
*/
class CheckUser {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{



		 if (Auth::check()) {
            switch (Auth::user()->tipo) {
                #Administrador
                case 'A':
                    return redirect('ver_usuarios');
                    break;
                #Común
                case 'C':
                    return redirect('Principal');
                    break;
                
                default:
                   return  redirect('logout');
                    break;
            }
        }

		/*
		$tipo = Session::get('tipo');

		if($tipo != "A") {

			Session::flush();
			return redirect('iniciar_sesion');
		*/
		return $next($request);
	}

}
