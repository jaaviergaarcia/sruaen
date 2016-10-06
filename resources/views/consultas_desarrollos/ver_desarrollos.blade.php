@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Desarrollos 
        </div>
        <div class="panel-body table-responsive">
              @if(Session::has('message'))
                  <div  class="alert alert-{{Session::get('class')}} alert-dismissible " role="alert" >
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
                @foreach ($premios as $premio)
                    <tbody>
                        <tr>
                            <td>{{$premio-> id}}</td>
                            <td>{{$premio-> fecha}}</td>
                            <td>{{$premio-> nombre_prof}}</td>
                            <td>{{$premio-> distincion}}</td>
                            <td>{{$premio-> institucion}}</td> 
                            <td>{{$premio-> pais}}</td>
                            <td>{{$premio-> descripcion}}</td>
                            <td>
                               <a  href="editar_informe/{{$informe->id}}" type="button" class="btn btn-primary">Editar</a> <br></br>
                               <a  href="eliminar_informe/{{$informe->id}}" class="btn btn-danger">Eliminar</a>
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