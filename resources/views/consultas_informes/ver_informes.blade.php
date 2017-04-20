@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Informes en SUAEN 
        </div>
        <div class="panel-body table-responsive">
        @if(Session::has('message'))
          <div  class="alert alert-{{Session::get('class')}} alert-dismissible" role="alert">
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
                        <th title="Título del informe">Título</th>
                        <th>Institución</th>
                        <th>Autor Principal</th>  
                        <th>Varios Autores</th>  
                        <th title="Número de la posición en la que aparece el Docente">Posición</th>   
                        <th>Lista de autores</th>  
                        <th>Operacion</th>        
                    </tr>
                </thead>
                @foreach ($informes as $informe)
                    <tbody>
                        <tr>
                            <td>{{$informe-> id}}</td>
                            <td>{{$informe-> fecha_pub}}</td>
                            <td>{{$informe-> autor}}</td>
                            <td>{{$informe-> titulo_info}}</td>
                            <td>{{$informe-> institucion}}</td> 
                            <td>{{$informe-> autor_princ}}</td>
                            <td>{{$informe-> varios_autores}}</td>
                            <td>{{$informe-> pos_autor}}</td>
                            <td>{{$informe-> lista_autor}}</td>
                            <td>
                            @if(Session::get('tipo')=='A')
                               <a  href="editar_informe/{{$informe->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                               <a  href="eliminar_informe/{{$informe->id}}"  type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash" data-toggle="tooltip" title="Da click para borrar"></span></a>
                            @elseif(Session::get('tipo')=='C')
                              <a  href="editar_informe/{{$informe->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                            @endif
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