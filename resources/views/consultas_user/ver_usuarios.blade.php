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
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Grupo Lab</th>
                        <th title="Relacion Laboral">Rel. Lab.</th>
                        <th>Categoria</th>
                        <th>Operación</th>           
                    </tr>
                </thead>
                @foreach ($profesors as $profesor)
                    <tbody>
                        <tr>
                            <td>{{$profesor-> id}}</td>
                            <td>{{$profesor-> name}}</td>
                            <td>{{$profesor-> email}}</td>
                            <td>{{$profesor-> tipo}}</td> 
                            <td>{{$profesor-> gpo_lab}}</td>
                            <td>{{$profesor-> rel_lab}}</td>
                            <td>{{$profesor-> categoria}}</td>
                            <td>
                               <a  href="editar_usuario/{{$profesor->id}}"  type="button" class="btn btn-default btn-xs" ><span class="fa fa-pencil" data-toggle="tooltip" title="Da click para editar"></span></a>

                               <a  href="eliminar_usuario/{{$profesor->id}}" type="button"  class="btn btn-danger btn-xs" data-toggle="tooltip" title="Da click para borrar"><span class="fa fa-trash"></span></a>
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