@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Trabajos 
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
                        <th title="Tipo de trabajo">Tipo</th>
                        <th>Autor</th>
                        <th title="Título del trabajo">Titulo Trab</th>
                        <th title="Sede del evento">Lugar</th>  
                        <th title="Lugar del evento">Entidad</th>
                        <th>Acci&oacuten</th>

                    </tr>
                </thead>
                @foreach ($trabajos as $trabajo)
                    <tbody>
                        <tr>
                            <td>{{$trabajo-> id}}</td>
                            <td>{{$trabajo-> fecha_pub}}</td>
                            <td>{{$trabajo-> tipo_trab}}</td>
                            <td>{{$trabajo-> autor}}</td> 
                            <td>{{$trabajo-> titulo_trab}}</td>
                            <td>{{$trabajo-> lugar_evento}}</td>
                            <td>{{$trabajo-> entidad_evento}}</td>
                            <td>
                            @if(Session::get('tipo')=='A')
                              <a  href="editar_trabajo/{{$trabajo->id}}" type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                              <a  href="eliminar_trabajo/{{$trabajo->id}}"  type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash" data-toggle="tooltip" title="Da click para borrar"></span></a>
                            @elseif(Session::get('tipo')=='C')
                            <a  href="editar_trabajo/{{$trabajo->id}}" type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
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