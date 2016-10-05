@extends('layouts.admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Captura de datos de las reseñas por Profesor por Año
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" method="post" action="guardar_resenia" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                    <select  class="selectpicker" data-style="btn-primary" name="fecha_pub" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Reseñas:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Reseñas" name="resenias" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre el autor" name="autor_res">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título de la reseña:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre de la reseña" name="tit_res">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Título de la Obra:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre de la obra" name="tit_obra" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">País:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del País donde se publica la reseña" name="pais" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor Principal:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="autor_princ">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Varios Autores:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="varios_aut" required="requeried">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                      </select>                  
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
                      <textarea class="form-control" rows="3" id="textarea1" placeholder="Lista de autores... " name="lista_autor" >    </textarea>
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