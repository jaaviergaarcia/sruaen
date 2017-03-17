<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profesor;

use Illuminate\Http\Request;

class QueryDataController extends Controller {

	public function ConsultasReporte() {

		$profesors = Profesor::all();//('nombre_prof')->get();
        return view('pdf_vista.productividad', ['profesors' => $profesors]);

	}

	
}
