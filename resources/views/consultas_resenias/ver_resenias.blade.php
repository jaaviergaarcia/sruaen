@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Rese&ntildeas en SUAEN 
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
                        <th>Año</th>
                        <th>Reseñas</th>
                        <th>Autor</th>
                        <th>Titulo de la reseña</th>
                        <th>Titulo de la Obra</th>
                        <th>Pa&iacutes</th>  
                        <th>Autor Princ</th>  
                        <th>Autores</th>   
                        <th>Pos del Autor</th>
                        <th>Lista Autores</th>
                        <th>Operacion</th>        
                    </tr>
                </thead>
                @foreach ($resenias as $resenia)
                    <tbody>
                        <tr>
                            <td>{{$resenia-> id}}</td>
                            <td>{{$resenia-> fecha_pub}}</td>
                            <td>{{$resenia-> resenias}}</td>
                            <td>{{$resenia-> autor_res}}</td>
                            <td>{{$resenia-> tit_res}}</td> 
                            <td>{{$resenia-> tit_obra}}</td>
                            <td>{{$resenia-> pais}}</td>
                            <td>{{$resenia-> autor_princ}}</td>
                            <td>{{$resenia-> varios_aut}}</td>
                            <td>{{$resenia-> pos_autor}}</td>
                            <td>{{$resenia-> lista_autor}}</td>
                            <td>
                               <a  href="editar_resenias/{{$resenia->id}}" type="button" class="btn btn-primary">Editar</a> <br></br>
                               <a  href="eliminar_resenia/{{$resenia->id}}" class="btn btn-danger">Eliminar</a>
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