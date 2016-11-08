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
                        <th>Tipo</th>
                        <th>Autor</th>
                        <th>Nombre Desarrollo</th>
                        <th>Tipo</th>  
                        <th>Sector</th>    
                        <th>Pa&iacutes</th>
                        <th>Acci&oacuten</th>

                    </tr>
                </thead>
                @foreach ($desarrollos as $desarrollo)
                    <tbody>
                        <tr>
                            <td>{{$desarrollo-> id}}</td>
                            <td>{{$desarrollo-> fecha_pub}}</td>
                            <td>{{$desarrollo-> tipo_des}}</td>
                            <td>{{$desarrollo-> autor}}</td> 
                            <td>{{$desarrollo-> nombre_des}}</td>
                            <td>{{$desarrollo-> tipo}}</td>
                            <td>{{$desarrollo-> sector}}</td>
                            <td>{{$desarrollo-> pais}}</td>
                            <td>
                               <a  href="editar_desarrollo/{{$desarrollo->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                                  <a  href="eliminar_desarrollo/{{$desarrollo->id}}"  type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash" data-toggle="tooltip" title="Da click para borrar"></span></a>
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