@extends('layouts.padre_admin')
@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Captura de Tutorias de los Docente
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role='form-horizontal' method="post" action="{{URL::to('actualizar_tutoria/').'/'.$tutoria->id}}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label" data-toggle="tooltip" title="Nombre el alumno aignado al docente">Nombre el alumno:</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control form-control-line" placeholder="Nombre del alumno" name="nombre_alum" value="{{$tutoria->nombre_alum}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Fecha de ingreso:</label>
                  <div class="col-sm-8">
                    <input type="date" name="fecha_in" value="{{$tutoria->fecha_in}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label" data-toggle="tooltip" title="Institución o dependencia del estudiante">Institución:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre de Institución o dependencia del estudiante" name="institucion_alum" value="{{$tutoria->institucion_alum}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label" data-toggle="tooltip" title="Nombre del profesor o tutor">Nombre profesor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del profesor o tutor" name="nombre_prof" value="{{$tutoria->nombre_prof}}">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label" data-toggle="tooltip" title="Institucion de adscripción del profesor">Institución del profesor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="institucion_prof" placeholder="Institucion de adscripción del profesor" value="{{$tutoria->institucion_prof}}">
                  </div>
                </div>

                <div class="form-group">
                 <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-4">
                      <button type="submit" class="btn btn-default btn-block">Guardar</button>             
                  </div>
                </div>
                
              </form> 

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->
@stop