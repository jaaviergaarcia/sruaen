@extends('layouts.admin')

@section('content')

	<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
	        <div class="panel-title">
	        	Concentrado de Productos Académicos por Docente
	        </div>
	        <div class="panel-body table-responsive">
		        @if(Session::has('message'))
		          <div  class="alert alert-success alert-dismissible" role="alert">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                 {{ Session::get('message')}} 
		          </div>
		        @endif

		        <form class="form-horizontal">
		        	 <div class="panel-body">
				        <div class="form-group">
			                 <label class="col-sm-4 control-label form-label">
			                  Instrucciones: Para generar un reporte debe:
			        			<ol style="float: left;">
				        			<li style="float: left;">
				        				Seleccionar al profesor.
				        			</li>
				        			<li style="float: left;" >
				        				Dar click en el boton <strong>Generar PDF</strong>
				        			</li>
			        			</ol>
			        		</label>
			        		<div class="col-sm-8">
		                                  
		                  	</div>
			         
			            </div>
			            <div class="form-group">
		                  <label class="col-sm-2 control-label form-label">Nombre del docente:</label>
		                  <div class="col-sm-8">
		                    <select class="selectpicker" data-style="btn-primary" name="gpo_lab" required="">
		                        <option selected disabled value="000">Seleccione una opcion</option>
		                        @foreach ($profesors as $profesor)
									<option> {{$profesor -> nombre_prof}} {{$profesor -> lastname }}</option>
								@endforeach
		                      </select>                  
		                  </div>
		                </div>
		                <br><br>
		                <br><br>
		                <br><br>

		                <div class="form-group">
		                 <label class="col-sm-2 control-label form-label"></label>
		                  <div class="col-sm-8">
		                      <button style="float: right;" type="submit" class="btn btn-default btn-small">Generar PDF</button>             
		                  </div>
		                </div>
		                <br>
		                <br>			
		        </form>
		    </div>
    	</div>
    </div>
    <!-- End Panel -->
 
 @stop
