@extends('layouts.padre_admin')
@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Actualizaci$oacuten de datos de Patentes por año por Profesor
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="POST" action="{{URL::to('actualizar_patente/').'/'.$patente->id}}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="fecha_pub" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                      @if($patente-> fecha_pub == 2011)
                        <option value="2011" selected="selected" class="selectpicker">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($patente-> fecha_pub == 2012)
                        <option value="2011">2011</option>
                        <option value="2012" selected="selected" class="selectpicker">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($patente->fecha_pub == 2013)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013" selected="selected" class="selectpicker">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($patente->fecha_pub == 2014)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014" selected="selected" class="selectpicker">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @elseif($patente->fecha_pub == 2015)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015" selected="selected" class="selectpicker">2015</option>
                        <option value="2016">2016</option>
                      @elseif($patente->fecha_pub ==2016)
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
                  <label class="col-sm-2 control-label form-label">Trabajo presentado:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="trabajos" placeholder="Nombre del trabajo presentado" required="" value="{{$patente->trabajos}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="autor_pat" placeholder="Nombre del autor" required="" value="{{$patente->autor_pat}}">
                  </div> 
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Titulo del trabajo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="tit_trabajo" placeholder="TItulo del trabajo" required="" value="{{$patente->tit_trabajo}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de participación:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="tipo_par" placeholder="Tipo de participacón del autor" required="" value="{{$patente->tipo_par}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de patente:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="tipo_pat" placeholder="Tipo de patente registrada" required="" value="{{$patente->tipo_pat}}">
                  </div>
                </div>      

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Estado de la patente:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="edo_pat" placeholder="Estado de la patente" required="" value="{{$patente->edo_pat}}">
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