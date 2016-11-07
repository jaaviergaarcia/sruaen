@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Captura de datos de Desarrollos Tecnológicos
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal"  role="form-horizontal" method="post" enctype="multipart/form-data" 
              action="{{URL::to('actualizar_desarrollo/').'/'.$desarrollo -> id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="fecha_pub" required="">
                    @if($desarrollo -> fecha_pub == 2011)
                        <option value="2011" selected="selected" class="selectpicker">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    @elseif($desarrollo -> fecha_pub == 2012)
                        <option value="2011">2011</option>
                        <option value="2012"selected="selected" class="selectpicker">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    @elseif($desarrollo -> fecha_pub == 2013)
                        <option value="2011">2013</option>
                        <option value="2012">2012</option>
                        <option value="2013"selected="selected" class="selectpicker">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    @elseif($desarrollo -> fecha_pub == 2014)
                        <option value="2011">2014</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014"selected="selected" class="selectpicker">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    @elseif($desarrollo -> fecha_pub == 2015)
                        <option value="2011">2015</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015"selected="selected" class="selectpicker">2015</option>
                        <option value="2016">2016</option>
                    @elseif($desarrollo -> fecha_pub == 2016)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016"selected="selected" class="selectpicker">2016</option>
                    @else                    
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2015">2016</option>

                    @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de Desarrollo:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo_des">
                    @if($desarrollo -> tipo_des == "Act. Profesional")
                        <option value="Act. Profesional" selected="selected" class="selectpicker">Actividad Profesional</option>
                        <option value="Empresa">Empresa</option>
                        <option value="Institucion">Institución</option>
                    @elseif($desarrollo -> tipo_des == "Empresa")
                        <option value="Act. Profesional">Actividad Profesional</option>
                        <option value="Empresa" selected="selected" class="selectpicker" >Empresa</option>
                        <option value="Institucion">Institución</option>
                    @elseif($desarrollo -> tipo_des == "Institucion")
                        <option value="Act. Profesional">Actividad Profesional</option>
                        <option value="Empresa">Empresa</option>
                        <option value="Institucion"  selected="selected" class="selectpicker" >Institución</option>
                    @else
                        <option selected disabled value="000" >Seleccione una opcion</option>

                        <option value="Act. Profesional">Actividad Profesional</option>
                        <option value="Empresa">Empresa</option>
                        <option value="Institucion">Institución</option>
                    @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor" required="" 
                    value="{{$desarrollo -> autor}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nombre del desarrollo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del desarrollo" name="nombre_des" required="" value="{{$desarrollo -> nombre_des}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Tipo que lo caracteriza" name="tipo" required=""
                    value="{{$desarrollo -> tipo}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Sector:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="sector" required="">
                    @if($desarrollo -> sector == "Si")
                        <option value="Si" selected="selected" class="selectpciker">Si</option>
                        <option value="No">No</option>
                    @elseif($desarrollo -> sector == "No")
                        <option value="Si">Si</option>
                        <option value="No" selected="selected" class="selectpicker">No</option>
                    @else
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    @endif
                      </select>                  
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Pais:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Pais" name="pais" required="" value="{{$desarrollo -> pais}}">
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
