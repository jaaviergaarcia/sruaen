<?php namespace App\Http\Middleware;

use Closure;
use Session;

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
		$tipo = Session::get('tipo');

		if($tipo != "A") {

			Session::flush();
			return redirect('iniciar_sesion');

		}
		return $next($request);
	}

}
