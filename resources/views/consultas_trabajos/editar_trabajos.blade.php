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
              <form class="form-horizontal" method="post" action="guardar_trabajo" enctype="multipart/form-data">
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
                      @if()
                        <option value="Art. en Extenso">Articulo en Extenso</option>
                        <option value="Conferencia Magistral">Conferencia Magistral</option>
                        <option value="Ponencia">Ponencia</option>
                        <option value="Poster">Poster</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del trabajo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del trabajo" name="titulo_trab">
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lugar del Evento:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="lugar_evento">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Int">Internacional</option>
                        <option value="Nac">Nacional</option>
                      </select>                  
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nacionalidad del Evento:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="entidad_evento" placeholder="Escriba el País/Estado donde se llevo acabo el evento">
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