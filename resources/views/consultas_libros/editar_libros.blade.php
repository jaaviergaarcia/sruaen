@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Actualizaci&oacuten de los datos de Libros
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="POST"  enctype="multipart/form-data"
              action="{{URL::to('actualizar_libro/').'/'.$libro->id}}">
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
                        @if($libro->tipo_libro == 'Publicado')
                          <option value="Publicado" class="selectpicker" selected="selected">Publicado</option>
                          <option value="Editado">Editado</option>
                          <option value="Traducidos">Traducidos</option>
                          <option value="Compilacion">Compilacion</option>
                          <option value="Autorizados">Autorizados</option>
                        @endif
                        @if($libro->tipo_libro == 'Editado')
                          <option value="Publicado">Publicado</option>
                          <option value="Editado"  class="selectpicker" selected="selected">Editado</option>
                          <option value="Traducidos">Traducidos</option>
                          <option value="Compilacion">Compilacion</option>
                          <option value="Autorizados">Autorizados</option>
                        @endif
                        @if($libro->tipo_libro == 'Traducidos')
                          <option value="Publicado">Publicado</option>
                          <option value="Editado">Editado</option>
                          <option value="Traducidos"  class="selectpicker" selected="selected">Traducidos</option>
                          <option value="Compilacion">Compilacion</option>
                          <option value="Autorizados">Autorizados</option>
                        @endif
                        @if($libro->tipo_libro == 'Compilacón')
                          <option value="Publicado">Publicado</option>
                          <option value="Editado">Editado</option>
                          <option value="Traducidos">Traducidos</option>
                          <option value="Compilacion"  class="selectpicker" selected="selected">Compilacion</option>
                          <option value="Autorizados">Autorizados</option>
                        @endif
                        @if($libro->tipo_libro == 'Autorizados')
                          <option value="Publicado">Publicado</option>
                          <option value="Editado">Editado</option>
                          <option value="Traducidos">Traducidos</option>
                          <option value="Compilacion">Compilacion</option>
                          <option value="Autorizados"  class="selectpicker" selected="selected">Autorizados</option>
                        @endif
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del autor" name="autor" required="" value="{{$libro->autor}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título del Libro:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del Libro" name="titulo_libro" required="" value="{{$libro->titulo_libro}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Editorial:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre de la editorial que publica el libro" name="editorial" required="" value="{{$libro->editorial}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Total de Autores:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Número de autores que publican el libro" name="total_autores" required="" value="{{$libro->total_autores}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Posicion del autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Posicion en la que se ubica el autor dentro de la lista de autores" name="pos_autor" required="" value="{{$libro->pos_autor}}">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Lista de Autores</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" rows="3" id="textarea1" placeholder="Lista de autores, su nombre  en la posicion que se ubica dentro de la lista" name="lista" > <?php echo $row["lista"]?>
                      </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">ISBN:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="ISBN del libro" name="isbn" required="" value="{{$libro->isbn}}">
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