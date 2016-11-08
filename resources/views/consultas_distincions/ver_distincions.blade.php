@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Distinciones y/o Premios otorgados a los Maestros y Doctores incorporados  en SUAEN 
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
                        <th>Fecha</th>
                        <th>Autor</th>
                        <th>Distincion/Premio</th>
                        <th>Institución</th>
                        <th>País</th>  
                        <th>Descripción</th>    
                        <th>Operación</th>
                    </tr>
                </thead>
                @foreach ($distincions as $distincion)
                    <tbody>
                        <tr>
                            <td>{{$distincion-> id}}</td>
                            <td>{{$distincion-> fecha}}</td>
                            <td>{{$distincion-> nombre_prof}}</td>
                            <td>{{$distincion-> distincion}}</td>
                            <td>{{$distincion-> institucion}}</td> 
                            <td>{{$distincion-> pais}}</td>
                            <td>{{$distincion-> descripcion}}</td>
                            <td>
                               <a  href="editar_distincion/{{$distincion->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                               <a  href="eliminar_distincion/{{$distincion->id}}"  type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash" data-toggle="tooltip" title="Da click para borrar"></span></a>
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