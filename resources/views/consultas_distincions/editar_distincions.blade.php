@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">
 
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Actualizaci&oacuten de datos de los Premios y/o Distinciones por Profesor
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="post"  enctype="multipart/form-data" 
              action="{{URL::to('actualizar_distincion/').'/'.$distincion->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="fecha" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                      @if($distincion -> fecha == 2011)
                        <option value="2011" class="selectpicker" selected="selected" >2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($distincion -> fecha == 2012)
                        <option value="2011">2011</option>
                        <option value="2012" class="selectpicker" selected="selected" >2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($distincion -> fecha == 2013)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013" class="selectpicker" selected="selected" >2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($distincion -> fecha == 2014)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014" class="selectpicker" selected="selected" >2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($distincion -> fecha == 2015)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015" class="selectpicker" selected="selected" >2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($distincion -> fecha == 2016)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016" class="selectpicker" selected="selected" >2016</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nombre del Profesor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del profesor premiado" name="nombre_prof" required="" value="{{$distincion->nombre_prof}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título de la Distinción:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Titulo de la distinción otorgada" name="distincion" required="" value="{{$distincion->distincion}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Institucion:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Institucion otorgante" name="institucion" required="" value="{{$distincion->institucion}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Pais:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Pais donde se otorgo la distinción" name="pais" required="" value="{{$distincion->pais}}">
                  </div>
                </div>
                

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Descripcion de la Distincion</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" rows="3" id="textarea1" placeholder="Descripcion de la Distinción" name="descripcion" required="">    
                      </textarea>
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