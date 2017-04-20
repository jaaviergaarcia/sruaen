<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profesor;
use PDF;
use DB;



use Illuminate\Http\Request;

class QueryDataController extends Controller {

	public function ConsultasReporte() {

		$profesors = Profesor::all();//('nombre_prof')->get();
        return view('pdf_vista.productividad', ['profesors' => $profesors]);

	}

	public function generaReporte(){

		$user = DB::table('desarrollos')
		->select(DB::raw('count(*) as des_count, profesor_id'))
		->where('profesor_id', "=",1)
		->get();
		return $user;

		/* $pdf = PDF::loadView('pdf_vista.reporte');
		return view ('pdf_vista.reporte'); */
		//return $pdf->download('productividad.pdf');

	}

	
}
