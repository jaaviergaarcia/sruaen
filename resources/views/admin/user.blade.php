@extends('layouts.admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Datos del PTC // Registro de Usuarios
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
                  @if(Session::has('message'))
                    <div  class="alert alert-{{Session::get('class')}} alert-dismissible " role="alert" >
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           {{ Session::get('message')}} 
                    </div>
                  @endif
              <form class="form-horizontal" method="post" action="guardar_profesor" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nombre:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del usuario" name="name" required="">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">E-mail:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control form-control-line" placeholder="Email del usuario" name="email" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Contraseña:</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control form-control-line" placeholder="Introduzca su contraseña" name="password" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Confirmar Contraseña:</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control form-control-line" placeholder="Confirme su contraseña por favor" name="passConfirmar" required="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de Usuario:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="A">Administrador</option>
                        <option value="C">Común</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Grupo Laboral:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="gpo_lab" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Doc. Investigador">Docente Investigador</option>
                        <option value="Tec. Academico">Técnico Academico</option>
                        <option value="Acad. Prof.">Acad. Prof.</option>
                        <option value="N/A">No Aplica</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Relación Laboral:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="rel_lab" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Base">Base</option>
                        <option value="Tiempo Determinado">Tiempo Determinado</option>
                        <option value="N/A">No Aplica</option>                            
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Categoria:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="categoria" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="Tiempo Completo">Tiempo Completo</option>
                        <option value="Tiempo Parcial">Tiempo Parcial</option> 
                        <option value="Hora-Clase">Hora-Clase</option>
                        <option value="N/A">No Aplica</option>                            
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Profesor(Perteneciente a):</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo_prof" required="">
                        <option selected disabled value="000">Seleccione una opcion</option>
                        <option value="PRODED">PRODED</option>
                        <option value="Candidato">PRODED/Candidato</option>
                        <option value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option value="Emérito">Emérito</option>
                        <option value="N/A">No Aplica</option>                        
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Grado Academíco:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="grad_acad" required="">
                        <option selected disabled value="00">Seleccione una opcion</option>
                        <option value="Doctorado">Doctorado</option>
                        <option value="Maestro">Maestro</option>
                        <option value="N/A">No Aplica</option>        
                      </select>                  
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Estudios Academicos:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Ultimo Grado de estudios alcanzado" name="est_acad" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Cuerpo Academíco:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="cuerpo_acad" required="">
                        <option  selected disabled value="000">Seleccione una opcion</option>
                        <option value="UAZ-CA-26">Ciencias Nucleares UAZ-CA- 26</option>
                        <option value="UAZ-CA-1">Radiobiología UAZ-CA-1 </option>
                        <option value="N/A">No Aplica</option>       
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Linea de Generación y Aplicación del Conocimiento (LGAC):</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="lgac" required="">
                        <option  selected disabled value="000">Seleccione una opcion</option>
                        <option value="Estudio y Aplicación de las Radiaciones">Estudio y Aplicación de las Radiaciones.</option>
                        <option value="Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto">Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto</option>
                        <option value="N/A">No Aplica</option> 
                      </select>                  
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