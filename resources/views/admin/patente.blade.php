@extends('layouts.admin')
@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Captura de datos de Patentes por año por Profesor
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="guardar_patente" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Año de Publicacion:</label>
                  <div class="col-sm-8">
                     <input type="date" name="fecha_pub" value="<?php echo date("Y-m-d");?>">           
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Trabajo presentado:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="trabajos" placeholder="Nombre del trabajo presentado" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Autor:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="autor_pat" placeholder="Nombre del autor" 
                    required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Titulo del trabajo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="tit_trabajo" placeholder="TItulo del trabajo" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de participación:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="tipo_par" placeholder="Tipo de participacón del autor" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de patente:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="tipo_pat" placeholder="Tipo de patente registrada" required="">
                  </div>
                </div>      

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Estado de la patente:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" name="edo_pat" placeholder="Estado de la patente" required="">
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