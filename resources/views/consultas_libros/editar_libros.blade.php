@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Actualización de los datos de Libros
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="post" action="{{URL::to('actualizar_libro/').'/'.$libro->id}}"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" autofocus="" name="fecha_pub" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        @if($libro->fecha_pub == 2011) 
                        <option value="2011" class="selectpicker" selected="selected">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        @endif
                        @if($libro->fecha_pub == 2012) 
                        <option value="2011">2011</option>
                        <option value="2012" class="selectpicker" selected="selected">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        @endif
                        @if($libro->fecha_pub == 2013) 
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013" class="selectpicker" selected="selected">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        @endif
                        @if($libro->fecha_pub == 2014) 
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014" class="selectpicker" selected="selected">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        @endif
                        @if($libro->fecha_pub == 2015) 
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015"class="selectpicker" selected="selected">2015</option>
                        <option value="2016">2016</option>
                        @endif
                        @if($libro->fecha_pub == 2016) 
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016" class="selectpicker" selected="selected">2016</option>
                        @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de Libro:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo_libro" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Publicado">Publicado</option>
                        <option value="Editado">Editado</option>
                        <option value="Traducidos">Traducidos</option>
                        <option value="Compilacion">Compilacion</option>
                        <option value="Autorizados">Autorizados</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del Libro:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del Libro" name="titulo_libro" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Editorial:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre de la editorial que publica el libro" name="editorial" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Total de Autores:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Número de autores que publican el libro" name="total_autores" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Posicion del autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Posicion en la que se ubica el autor dentro de la lista de autores" name="pos_autor" required="">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lista de Autores</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" rows="3" id="textarea1" placeholder="Lista de autores, su nombre  en la posicion que se ubica dentro de la lista" name="lista">    
                      </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">ISBN:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="ISBN del libro" name="isbn" required="">
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