<?php 

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class CheckUserComun {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next){
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
	return $next($request);
	}
}