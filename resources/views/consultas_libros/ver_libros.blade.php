@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Libros en el Sistema 
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
                        <th>Año</th>
                        <th title="Tipo de libro">Tipo</th>
                        <th>Autor</th>
                        <th title="Título del libro">Titulo</th>
                        <th>Editorial</th>
                        <th title="Total de autores">Total de Autores</th>  
                        <th title="No. de posición del  autor en la lista">Posición</th>   
                        <th>Lista de autores</th>  
                        <th>ISBN</th>
                        <th>Operación</th>        
                    </tr>
                </thead>
                @foreach ($libros as $libro)
                    <tbody>
                        <tr>
                            <td>{{$libro-> id}}</td>
                            <td>{{$libro-> fecha_pub}}</td>
                            <td>{{$libro-> tipo_libro}}</td>
                            <td>{{$libro-> autor}}</td>
                            <td>{{$libro-> titulo_libro}}</td> 
                            <td>{{$libro-> editorial}}</td>
                            <td>{{$libro-> total_autores}}</td>
                            <td>{{$libro-> pos_autor}}</td>
                            <td>{{$libro-> lista}}</td>
                            <td>{{$libro-> isbn}}</td>
                            <td>
                               <a  href="editar_libro/{{$libro->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                               <a  href="eliminar_libro/{{$libro->id}}"  type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash" data-toggle="tooltip" title="Da click para borrar"></span></a>
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