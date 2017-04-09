<?php
use App\Tutoria;
use App\Profesor;
use App\Libro;
Use App\Patente;
use App\Desarrollo;
use App\Trabajo;
use App\Articulo;
use App\Distincion;
Use App\Informe;
use App\Resenia;
/*
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| RUTAS PARA EL INICIO DE SESION
|--------------------------------------------------------------------------
*/
Route::get('/', 'LoginController@mostrarinicio_sesion');
Route::get('iniciar_sesion','LoginController@mostrarinicio_sesion');
Route::post('entrar','LoginController@entrar');
Route::get('logout','LoginController@logout');

Route::get('PDF', 'QueryDataController@ConsultasReporte');
Route::get('generaPDF', 'QueryDataController@generaReporte');

	//$pdf = PDF::loadView('pdf_vista.productividad');
	//return view ('pdf_vista.productividad');
	//return $pdf->download('productividad.pdf');



/*RUTAS PARA EL ADMIN ¿?*/
 //Route::get('admin','AdminController@admin');

Route::group(['middleware' => 'admin'], function () {


	Route::get('Principal','AdminController@admin');
	/* 
	|--------------------------------------------------------------------------
	| RUTAS MODELO PROFESOR-USUARIO
	|--------------------------------------------------------------------------
	*/

	Route::get('nuevo_profesor','ProfesorController@nuevo_profesor');
	Route::post('guardar_profesor','ProfesorController@guardar_profesor');
    Route::get('ver_usuarios','ProfesorController@ver_usuarios');
    Route::get('editar_usuario/{id}','ProfesorController@editar_usuario');
    Route::post('actualizar_usuario/{id}','ProfesorController@actualizar_usuario');
    Route::get('eliminar_usuario/{id}','ProfesorController@eliminar_usuario');
	/*
	|--------------------------------------------------------------------------
	| RUTAS MODELO ARTICULO
	|--------------------------------------------------------------------------
	*/
	Route::get('nuevo_articulo','ArticuloController@nuevo_articulo');
	Route::post('guardar_articulo','ArticuloController@guardar_articulo');
	Route::get('articulos','ArticuloController@articulos');  //vista de los almacenados
	Route::get('editar_articulos/{id}','ArticuloController@editar_articulos');
	Route::post('actualizar_articulo/{id}','ArticuloController@actualizar_articulo');
	Route::get('eliminar_articulo/{id}','ArticuloController@eliminar_articulo');

		/*PARA EL MODELO DE DISTINCION*/
	Route::get('nueva_distincion','DistincionController@nueva_distincion');
	Route::post('guardar_distincion','DistincionController@guardar_distincion');
	Route::get('distinciones','DistincionController@distinciones');				//vista de los almacenados
	Route::get('editar_distincion/{id}','DistincionController@editar_distincion');
	Route::post('actualizar_distincion/{id}','DistincionController@actualizar_distincion');
	Route::get('eliminar_distincion/{id}','DistincionController@eliminar_distincion');
		/*
		|--------------------------------------------------------------------------
		| RUTAS PARA EL MODELO INFORME
		|--------------------------------------------------------------------------
		*/
	Route::get('nuevo_informe','InformeController@nuevo_informe');
	Route::post('guardar_informe','InformeController@guardar_informe');
	Route::get('informes','InformeController@informes');             //vista de los informes almacenados
	Route::get('editar_informe/{id}','InformeController@editar_informe');
	Route::post('actualizar_informe/{id}','InformeController@actualizar_informe');
	Route::get('eliminar_informe/{id}','InformeController@eliminar_informe');
		/*
		|-------------------------------------------------------------------------
		| RUTAS PARA EL MODELO LIBRO
		|-------------------------------------------------------------------------
		*/
	Route::get('nuevo_libro','LibroController@nuevo_libro');
	Route::post('guardar_libro','LibroController@guardar_libro');
	Route::get('libros','LibroController@libros');    //vista de los almacenados
	Route::get('editar_libro/{id}','LibroController@editar_libro');
	Route::post('actualizar_libro/{id}','LibroController@actualizar_libro');
	Route::get('eliminar_libro/{id}','LibroController@eliminar_libro');
		
		/*
		|--------------------------------------------------------------------------
		| RUTAS PARA EL MODELO RESEÑIAS
		|--------------------------------------------------------------------------
		*/
	Route::get('nueva_resenia','ReseniaController@nueva_resenia');
	Route::post('guardar_resenia','ReseniaController@guardar_resenia');
	Route::get('resenias','ReseniaController@resenias');
	Route::get('editar_resenias/{id}','ReseniaController@editar_resenias');
	Route::post('actualizar_resenia/{id}','ReseniaController@actualizar_resenia');
	Route::get('eliminar_resenia/{id}','ReseniaController@eliminar_resenia');


/*
|--------------------------------------------------------------------------
| RUTAS PARA LAS TABLAS CON RELACION 1*M
|--------------------------------------------------------------------------
*/



		/*
		|--------------------------------------------------------------------------
		| RUTAS PARA EL MODELO DESARROLLO
		|--------------------------------------------------------------------------
		*/
	Route::get('nuevo_desarrollo','DesarrolloController@nuevo_desarrollo');
	Route::post('guardar_desarrollo','DesarrolloController@guardar_desarrollo');
	Route::get('desarrollos','DesarrolloController@ver_desarrollos');
	Route::get('editar_desarrollo/{id}','DesarrolloController@editar_desarrollo');
	Route::post('actualizar_desarrollo/{id}','DesarrolloController@actualizar_desarrollo');
	Route::get('eliminar_desarrollo/{id}','DesarrolloController@eliminar_desarrollo');

		/*
		|--------------------------------------------------------------------------
		| RUTAS PARA EL MODELO PATENTE
		|--------------------------------------------------------------------------
		*/
	Route::get('nueva_patente','PatenteController@nuevo_patente');
	Route::post('guardar_patente','PatenteController@guardar_patente');
	Route::get('patentes','PatenteController@ver_patentes');
	Route::get('editar_patente/{id}','PatenteController@editar_patente');
	Route::post('actualizar_patente/{id}','PatenteController@actualizar_patente');
	Route::get('eliminar_patente/{id}','PatenteController@eliminar_patente');

		/*
		|--------------------------------------------------------------------------
		| RUTAS PARA EL MODELO TRABAJO
		|--------------------------------------------------------------------------
		*/
	Route::get('nuevo_trabajo','TrabajoController@nuevo_trabajo');
	Route::post('guardar_trabajo','TrabajoController@guardar_trabajo');
	Route::get('trabajos','TrabajoController@ver_trabajos');
	Route::get('editar_trabajo/{id}','TrabajoController@editar_trabajo');
	Route::post('actualizar_trabajo/{id}','TrabajoController@actualizar_trabajo');
	Route::get('eliminar_trabajo/{id}','TrabajoController@eliminar_trabajo');

	/*
		|--------------------------------------------------------------------------
		| RUTAS PARA EL MODELO TURORIAS
		|--------------------------------------------------------------------------
		*/
	Route::get('agregar_tutoria','TutoriasController@nueva_tutoria');
	Route::post('guardar_tutoria','TutoriasController@guardar_tutoria');
	Route::get('tutorias','TutoriasController@ver_tutorias');
	Route::get('editar_tutoria/{id}','TutoriasController@editar_tutoria');
	Route::post('actualizar_tutoria/{id}','TutoriasController@actualizar_tutoria');
	Route::get('eliminar_tutoria/{id}','TutoriasController@eliminar_tutoria');

});

/*****************************************/
//Route::get('user','AdminController@usuario');
//Route::get('libro','AdminController@libro');
//Route::get('informe','AdminController@informe');
//Route::get('distincion','AdminController@distincion');
//Route::get('desarrollo','AdminController@desarrollo');
//Route::get('resena','AdminController@resena');
//Route::get('patente','AdminController@patente');
//Route::get('trabajo','AdminController@trabajo');


/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]); 

*/
