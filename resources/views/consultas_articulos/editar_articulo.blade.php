@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Actualizaci&oacuten de datos de los Articulos por Profesor Por año
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="POST" enctype="multipart/form-data"  action="{{URL::to('actualizar_articulo/').'/'.$articulo->id}}" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="fecha_pub" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                      @if($articulo -> fecha_pub == 2011)
                        <option value="2011" selected="selected" class="selectpicker">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif

                      @if($articulo -> fecha_pub == 2012)
                        <option value="2011">2011</option>
                        <option value="2012" selected="selected" class="selectpicker" >2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($articulo -> fecha_pub == 2013)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013" selected="selected" class="selectpicker">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif

                      @if($articulo -> fecha_pub == 2014)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014"selected="selected" class="selectpicker" >2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      @endif
                      @if($articulo -> fecha_pub == 2015)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015" selected="selected" class="selectpicker">2015</option>
                        <option value="2016">2016</option>
                      @endif

                      @if($articulo -> fecha_pub == 2016)
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016" selected="selected" class="selectpicker">2016</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de Articulo:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo_art" required="">
                        <option data-selected="000">Seleccione una opcion</option>

                      @if($articulo->tipo_art == "Revistas Indizadas")
                        <option value="Revistas Indizadas" selected="selected" class="selectpicker">Revistas Indizadas</option>
                        <option value="Revistas Arbitradas">Revistas Arbitradas</option>
                        <option value="Memorias Congreso">Memorias Congreso</option>
                        <option value="Pub. Sin Arbitraje">Publicaciones sin Arbitraje</option>
                      @endif

                      @if($articulo->tipo_art == "Revistas Arbitradas")
                        <option value="Revistas Indizadas">Revistas Indizadas</option>
                        <option value="Revistas Arbitradas" selected="selected" class="selectpicker">Revistas Arbitradas</option>
                        <option value="Memorias Congreso">Memorias Congreso</option>
                        <option value="Pub. Sin Arbitraje">Publicaciones sin Arbitraje</option>
                      @endif

                      @if($articulo->tipo_art == "Memorias Congreso")
                        <option value="Revistas Indizadas">Revistas Indizadas</option>
                        <option value="Revistas Arbitradas">Revistas Arbitradas</option>
                        <option value="Memorias Congreso" selected="selected" class="selectpicker">Memorias Congreso</option>
                        <option value="Pub. Sin Arbitraje">Publicaciones sin Arbitraje</option>
                      @endif

                      @if($articulo->tipo_art == "Publicaciones sin Arbitraje")
                        <option value="Revistas Indizadas">Revistas Indizadas</option>
                        <option value="Revistas Arbitradas">Revistas Arbitradas</option>
                        <option value="Memorias Congreso">Memorias Congreso</option>
                        <option value="Pub. Sin Arbitraje" selected="selected" class="selectpicker">Publicaciones sin Arbitraje</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor" required=""  value="{{$articulo->autor}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del Articulo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del artículo" name="titulo_art" required="" 
                    value="{{$articulo->titulo_art}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Revista:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del revista" name="revista" required=""
                    value="{{$articulo->revista}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor Principal:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="principal" required="">
                        <option data-selected="000">Seleccione una opcion</option>
                        @if($articulo -> principal == "Si")
                        <option value="Si" selected="selected" class="selectpicker">Si</option>
                        <option value="No">No</option>
                        @endif

                        @if($articulo -> principal == "No")
                        <option value="Si">Si</option>
                        <option value="No" selected="selected" class="selectpicker">No</option>
                        @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Varios Autores:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="autores" required="">
                        <option data-selected="000">Seleccione una opcion</option>
                      @if($articulo -> autores == "Si")
                        <option value="Si" selected="selected" class="selectpicker">Si</option>
                        <option value="No">No</option>
                      @endif
                      @if($articulo -> autores == "No")
                        <option value="Si">Si</option>
                        <option value="No" selected="selected" class="selectpicker">No</option>
                      @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Posicion del autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Posicion en la que se ubica el autor dentro de la lista de autores" name="pos_autor" required="" value="{{$articulo->pos_autor}}">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lista de Autores</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" rows="" id="textarea1" placeholder="Lista de Autores..." 
                      name="lista_autor".n12br-> </textarea>
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