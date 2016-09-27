@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Actualización de datos de los Informes/Reportes Técnicos
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="POST"   
              action="{{URL::to('actualizar_informe/').'/'.$informe->id}}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="fecha_pub" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        @if($informe -> fecha_pub == 2011)
	                        <option value="2011" selected="selected" class="selectpicker">2011</option>
	                        <option value="2012">2012</option>
	                        <option value="2013">2013</option>
	                        <option value="2014">2014</option>
	                        <option value="2015">2015</option>
	                        <option value="2016">2016</option>
                        @endif

                        @if($informe -> fecha_pub == 2012)
	                        <option value="2011">2011</option>
	                        <option value="2012"selected="selected" class="selectpicker">2012</option>
	                        <option value="2013">2013</option>
	                        <option value="2014">2014</option>
	                        <option value="2015">2015</option>
	                        <option value="2016">2016</option>
                        @endif

                        @if($informe -> fecha_pub == 2013)
	                        <option value="2011">2011</option>
	                        <option value="2012">2012</option>
	                        <option value="2013"selected="selected" class="selectpicker">2013</option>
	                        <option value="2014">2014</option>
	                        <option value="2015">2015</option>
	                        <option value="2016">2016</option>
                        @endif

                        @if($informe -> fecha_pub == 2014)
	                        <option value="2011">2011</option>
	                        <option value="2012">2012</option>
	                        <option value="2013">2013</option>
	                        <option value="2014" selected="selected" class="selectpicker">2014</option>
	                        <option value="2015">2015</option>
	                        <option value="2016">2016</option>
                        @endif

                        @if($informe -> fecha_pub == 2015)
	                        <option value="2011">2011</option>
	                        <option value="2012">2012</option>
	                        <option value="2013">2013</option>
	                        <option value="2014">2014</option>
	                        <option value="2015" selected="selected" class="selectpicker">2015</option>
	                        <option value="2016">2016</option>
                        @endif

                        @if($informe -> fecha_pub == 2016)
	                        <option value="2011">2011</option>
	                        <option value="2012">2012</option>
	                        <option value="2013">2013</option>
	                        <option value="2014">2014</option>
	                        <option value="2015">2015</option>
	                        <option value="2016"  selected="selected" class="selectpicker">2016</option>
                        @endif
                      </select>                  
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor" required="" value="{{$informe->autor}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del Informe-Reporte:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del Reporte" name="titulo_info" required="" value="{{$informe->titulo_info}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Institucion:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre de la Institucion a la que se presenta el Informe-Reporte" name="institucion" required="" value="{{$informe->institucion}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor Principal:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="autor_princ" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                       @if($informe->autor_princ == 'Si')
                        <option value="Si" selected="selected" class="selectpicker">Si</option>
                        <option value="No">No</option>
                       @endif
                       @if($informe->autor_princ == 'No')
                        <option value="Si">Si</option>
                        <option value="No" selected="selected" class="selectpicker">No</option>
                       @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Varios Autores:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="varios_autores" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                       @if($informe->varios_autores == 'Si') 
                        <option value="Si" selected="selected" class="selectpicker">Si</option>
                        <option value="No">No</option>
                       @endif
                       @if($informe->varios_autores == 'No') 
                        <option value="Si" >Si</option>
                        <option value="No"selected="selected" class="selectpicker">No</option>
                       @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Posicion del autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Posicion en la que se ubica el autor dentro de la lista de autores" name="pos_autor" required="" value="{{$informe->pos_autor}}">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lista de Autores</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" rows="" id="textarea1" placeholder="Lista de autores, su nombre segun la posicion en la que se encuentre" name="lista_autor" required=""> 
                      </textarea>
                  </div>
                </div>

                <div class="form-group">
                 <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-4">
                      <button type="submit" class="btn btn-default btn-block">Actualizar</button>             
                  </div>
                </div>


              </form> 

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

@stop
