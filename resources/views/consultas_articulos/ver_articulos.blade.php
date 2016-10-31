@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Articulos en SUAEN 
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
                        <th>No </th>
                        <th>Año</th>
                        <th>Tipo del Articulo</th>
                        <th>Autor</th>
                        <th>Titulo del Articulo</th>
                        <th>Revista</th>
                        <th>Autor Principal</th>  
                        <th>Varios Autores</th>  
                        <th>Pos del Autor</th>   
                        <th>Lista de autores</th>  
                        <th>Operacion</th>        
                    </tr>
                </thead>
                @foreach ($articulos as $articulo)
                    <tbody>
                        <tr>
                            <td>{{$articulo-> id}}</td>
                            <td>{{$articulo-> fecha_pub}}</td>
                            <td>{{$articulo-> tipo_art}}</td>
                            <td>{{$articulo-> autor}}</td>
                            <td>{{$articulo-> titulo_art}}</td> 
                            <td>{{$articulo-> revista}}</td>
                            <td>{{$articulo-> principal}}</td>
                            <td>{{$articulo-> autores}}</td>
                            <td>{{$articulo-> pos_autor}}</td>
                            <td>{{$articulo-> lista_autor}}</td>
                            <td>
                          <!--  @if(Session::get('tipo') == 'A') -->
                               <a  href="editar_articulos/{{$articulo->id}}" type="button" class="btn btn-primary">Editar</a> <br></br>
                               <a  href="eliminar_articulo/{{$articulo->id}}" class="btn btn-danger">Eliminar</a>
                          <!--  @elseif(Session::get('tipo') == 'C') -->
                                <a  href="editar_articulos/{{$articulo->id}}" type="button" class="btn btn-primary">Editar</a> <br></br>
                          <!--  @endif -->
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