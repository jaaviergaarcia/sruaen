@extends('layouts.admin')

@section('content')
<!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Listado de Patentes en el Sistema 
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
                        <th>Trabajos</th>
                        <th>Autor</th>
                        <th title="Titulo del trabajo" data-placement="top"> Titulo del trabajo</th>
                        <th title="Tipo de participación" data-placement="top">Tipo de Part</th>
                        <th title="Tipo de la Patente" data-placement="top">Tipo P.</th>  
                        <th title="Estado de la Patente" data-placement="top">Edo.</th> 
                        <th>Operación</th>        
                    </tr>
                </thead>
                @foreach ($patentes as $patente)

                  <?php 
                    $old_date = date_create("$patente->fecha_pub");
                    $new_date = date_format($old_date, "d/m/Y");
                  ?>
                    <tbody>
                        <tr>
                            <td>{{$patente-> id}}</td>
                            <td>{{$patente-> fecha_pub}}</td>
                            <td>{{$patente-> trabajos}}</td>
                            <td>{{$patente-> autor_pat}}</td>
                            <td>{{$patente-> tit_trabajo}}</td> 
                            <td>{{$patente-> tipo_par}}</td>
                            <td>{{$patente-> tipo_pat}}</td>
                            <td>{{$patente-> edo_pat}}</td>
                            <td>
                            @if(Session::get('tipo')== 'A')
                               <a  href="editar_patente/{{$patente->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
                               <a  href="eliminar_patente/{{$patente->id}}"  type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash" data-toggle="tooltip" title="Da click para borrar"></span></a>
                            @elseif(Session::get('tipo') == 'C')
                              <a  href="editar_patente/{{$patente->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>
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