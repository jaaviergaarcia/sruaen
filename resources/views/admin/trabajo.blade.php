@extends('layouts.admin')
@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Captura de datos de los Trabajos por Docente por Año
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option>Seleccione una opcion</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de trabajo:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option>Seleccione una opcion</option>
                        <option>Articulo en Extenso</option>
                        <option>Conferencia Magistral</option>
                        <option>Ponencia</option>
                        <option>Poster</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del trabajo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del trabajo">
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lugar del Evento:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Internacional</option>
                        <option>Nacional</option>
                      </select>                  
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nacionalidad del Evento:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Escriba el País/Estado donde se llevo acabo el evento">
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