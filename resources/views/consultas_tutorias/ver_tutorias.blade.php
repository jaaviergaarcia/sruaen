@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Profesores
        </div>
        <div class="panel-body table-responsive">
        @if(Session::has('message'))
          <div  class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 {{ Session::get('message')}} 
          </div>
        @endif

            <table id="example0" class="table display">
                <thead class="thead-inverse">
                    <tr>                      
                        <th>No</th>
                        <th title="Nombre del Alumno">Alumno</th>
                        <th>Fecha de ingreso</th>
                        <th title="Institución a la que el Alumno pertenece">Institucion </th>

                        <th>Profesor</th>
                        <th title="Institución a la que el Profesor pertenece">Institucion P.</th>
                        <th>Operación</th>           
                    </tr>
                </thead>
                @foreach ($tutorias as $tutoria)
                
                <?php 
	                $old_date = date_create("$tutoria->fecha_in");
	                $new_date = date_format($old_date, "d/m/Y");
                ?>
                    <tbody>
                        <tr>
                            <td>{{$tutoria-> id}}</td>
                            <td >{{$tutoria-> nombre_alum}}</td>
                            <td>{{$new_date}}</td>
                            <td>{{$tutoria-> institucion_alum}}</td>
                            <td>{{$tutoria-> nombre_prof}}</td> 
                            <td>{{$tutoria-> institucion_prof}}</td>
                            <td>
                               <a  href="editar_tutoria/{{$tutoria->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>

                               <a  href="eliminar_tutoria/{{$tutoria->id}}" type="button"  class="btn btn-danger btn-xs" data-toggle="tooltip" title="Da click para borrar"><span class="fa fa-trash"></span></a>
                            </td>          
                        </tr>
                    </tbody>
                @endforeach          
                          
            </table>
        </div>

      </div>
    </div>
    <!-- End Panel -->
    @stop

    @section('search')

<!-- ================================================
Data Tables
================================================ -->
<script src="js/datatables/datatables.min.js"></script>
    <script>
           $(document).ready(function() {
           $('#example0').DataTable();
        } );
   </script>

   @stop
nombre_alum
fecha_in
institucion_alum
nombre_prof
institucion_prof