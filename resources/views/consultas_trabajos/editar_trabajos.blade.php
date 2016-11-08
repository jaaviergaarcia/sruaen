@extends('layouts.padre_admin')
@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Captura de datos de los Trabajos por año por Docente
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal"  role="form-horizontal" method="post" enctype="multipart/form-data" 
              action="{{URL::to('actualizar_trabajo/').'/'.$trabajo -> id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="fecha_pub">
                        <option selected disabled value="000">Seleccione una opcion</option>
                      @if($trabajo->fecha_pub == 2011)
                        <option value="2011" selected="selected" class="selectpicker">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($trabajo->fecha_pub == 2012)
                        <option value="2011">2011</option>
                        <option value="2012" selected="selected" class="selectpicker">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($trabajo->fecha_pub == 2013)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013" selected="selected" class="selectpicker">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($trabajo->fecha_pub == 2014)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014" selected="selected" class="selectpicker">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($trabajo->fecha_pub == 2015)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015" selected="selected" class="selectpicker">2015</option>
                        <option value="2016">2016</option>
                      @elseif($trabajo->fecha_pub == 2016)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016" selected="selected" class="selectpicker">2016</option>
                      @else
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de trabajo:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo_trab">
                        <option selected disabled value ="000">Seleccione una opcion</option>
                      @if($trabajo->tipo_trab == "Art. en Extenso")
                        <option value="Art. en Extenso" selected="selected" class="selectpicker">Articulo en Extenso</option>
                        <option value="Conferencia Magistral">Conferencia Magistral</option>
                        <option value="Ponencia">Ponencia</option>
                        <option value="Poster">Poster</option>
                      @elseif($trabajo->tipo_trab == "Conferencia Magistral")
                        <option value="Art. en Extenso">Articulo en Extenso</option>
                        <option value="Conferencia Magistral" selected="selected" class="selectpicker" >Conferencia Magistral</option>
                        <option value="Ponencia">Ponencia</option>
                        <option value="Poster">Poster</option>                      
                      @elseif($trabajo->tipo_trab == "Ponencia")
                        <option value="Art. en Extenso">Articulo en Extenso</option>
                        <option value="Conferencia Magistral">Conferencia Magistral</option>
                        <option value="Ponencia"  selected="selected" class="selectpicker">Ponencia</option>
                        <option value="Poster">Poster</option>
                      @elseif($trabajo->tipo_trab == "Poster")
                        <option value="Art. en Extenso">Articulo en Extenso</option>
                        <option value="Conferencia Magistral">Conferencia Magistral</option>
                        <option value="Ponencia">Ponencia</option>
                        <option value="Poster"  selected="selected" class="selectpicker">Poster</option>
                      @else
                        <option value="Art. en Extenso">Articulo en Extenso</option>
                        <option value="Conferencia Magistral">Conferencia Magistral</option>
                        <option value="Ponencia">Ponencia</option>
                        <option value="Poster">Poster</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor" value="{{$trabajo->autor}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del trabajo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del trabajo" name="titulo_trab" value="{{$trabajo->titulo_trab}}">
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lugar del Evento:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="lugar_evento">
                        <option selected disabled value="000">Seleccione una opcion</option>
                      @if($trabajo->lugar_evento == "Int")
                        <option value="Int" selected="selected" class="selectpicker">Internacional</option>
                        <option value="Nac">Nacional</option>
                      @elseif($trabajo->lugar_evento == "Nac")
                        <option value="Int">Internacional</option>
                        <option value="Nac" selected="selected" class="selectpicker">Nacional</option>
                      @else
                        <option value="Int">Internacional</option>
                        <option value="Nac">Nacional</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nacionalidad del Evento:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="entidad_evento" placeholder="Escriba el País/Estado donde se llevo acabo el evento" value="{{$trabajo->entidad_evento}}">
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