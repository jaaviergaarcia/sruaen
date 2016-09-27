@extends('layouts.padre_admin')

@section('content')
<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Datos del PTC - Actualización de Usuarios//Profesores 
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal" role="form-horizontal" method="post" action="{{URL::to('actualizar_usuario/').'/'.$profesor->id}}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nombre:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" value="{{$profesor->nombre_prof}}" placeholder="Nombre del usuario" name="nombre_prof" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Apellidos:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" value="{{$profesor->lastname}}" placeholder="Apellidos del usuario" name="lastname" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">E-mail:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control form-control-line" value="{{$profesor->email}}" placeholder="Email del usuario" name="email" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Contraseña:</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control form-control-line" value="{{$profesor->pass}}" placeholder="Introduzca su contraseña" name="pass" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Tipo de Usuario:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo" >
                    <option selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor->tipo == 'A')                        
                        <option  selected="selected" value="A" class="selectpicker">Administrador</option>
                        <option value="C" class="selectpicker">Común</option>
                    @endif

                    @if($profesor->tipo == 'C')                        
                        <option  value="A" class="selectpicker">Administrador</option>
                        <option selected="selected" value="C" class="selectpicker">Común</option>
                    @endif


                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Grupo Laboral:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="gpo_lab" >
                        <option selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor -> gpo_lab == "Doc. Investigador")    
                        <option selected="selected" value="Doc. Investigador" class="selectpicker">Docente Investigador</option>
                        <option value="Tec. Academico" class="selectpicker">Técnico Academico</option>
                        <option value="Acad. Prof." class="selectpicker">Acad. Prof.</option>
                        <option value="N/A" class="selectpicker">No Aplica</option>
                    @endif

                    @if($profesor -> gpo_lab == "Tec. Academico")    
                        <option value="Doc. Investigador" class="selectpicker">Docente Investigador</option>
                        <option selected="selected" value="Tec. Academico" class="selectpicker">Técnico Academico</option>
                        <option value="Acad. Prof." class="selectpicker">Acad. Prof.</option>
                        <option value="N/A" class="selectpicker">No Aplica</option>
                    @endif

                     @if($profesor -> gpo_lab == "Acad. Prof.")    
                        <option value="Doc. Investigador" class="selectpicker">Docente Investigador</option>
                        <option value="Tec. Academico" class="selectpicker">Técnico Academico</option>
                        <option selected="selected" value="Acad. Prof." class="selectpicker">Acad. Prof.</option>
                        <option value="N/A" class="selectpicker">No Aplica</option>
                    @endif

                     @if($profesor -> gpo_lab == "N/A")    
                        <option value="Doc. Investigador" class="selectpicker">Docente Investigador</option>
                        <option value="Tec. Academico" class="selectpicker">Técnico Academico</option>
                        <option value="Acad. Prof." class="selectpicker">Acad. Prof.</option>
                        <option selected="selected" value="N/A" class="selectpicker">No Aplica</option>
                    @endif


                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Relación Laboral:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="rel_lab" >
                        <option selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor -> rel_lab == "Base")
                        <option selected="selected" value="Base" class="selectpicker">Base</option>
                        <option value="Tiempo Determinado" class="selectpicker">Tiempo Determinado</option>
                        <option value="N/A" class="selectpicker">No Aplica</option>  
                    @endif
                    @if($profesor -> rel_lab == "Tiempo Determinado")
                        <option value="Base" class="selectpicker">Base</option>
                        <option selected="selected" value="Tiempo Determinado" class="selectpicker">Tiempo Determinado</option>
                        <option value="N/A">No Aplica</option>  
                    @endif     
                    @if($profesor -> rel_lab == "N/A")
                        <option value="Base" class="selectpicker">Base</option>
                        <option value="Tiempo Determinado" class="selectpicker">Tiempo Determinado</option>
                        <option selected="selected" value="N/A" class="selectpicker">No Aplica</option>  
                    @endif                               
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Categoria:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="categoria" >
                        <option selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor -> categoria == "Tiempo Completo")
                        <option selected="selected" class="selectpicker" value="Tiempo Completo">Tiempo Completo</option>
                        <option class="selectpicker" value="Tiempo Parcial">Tiempo Parcial</option> 
                        <option class="selectpicker" value="Hora-Clase">Hora-Clase</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> categoria == "Tiempo Parcial")
                        <option class="selectpicker" value="Tiempo Completo">Tiempo Completo</option>
                        <option selected="selected" class="selectpicker" value="Tiempo Parcial">Tiempo Parcial</option> 
                        <option class="selectpicker" value="Hora-Clase">Hora-Clase</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> categoria == "Hora-Clase")
                        <option class="selectpicker" value="Tiempo Completo">Tiempo Completo</option>
                        <option class="selectpicker" value="Tiempo Parcial">Tiempo Parcial</option> 
                        <option selected="selected" class="selectpicker" value="Hora-Clase">Hora-Clase</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> categoria == "N/A")
                        <option class="selectpicker" value="Tiempo Completo">Tiempo Completo</option>
                        <option class="selectpicker" value="Tiempo Parcial">Tiempo Parcial</option> 
                        <option class="selectpicker" value="Hora-Clase">Hora-Clase</option>
                        <option selected="selected" class="selectpicker" value="N/A">No Aplica</option>
                    @endif


                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Profesor(Perteneciente a):</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="tipo_prof" >
                        <option selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor -> tipo_prof == "PRODED")    
                        <option selected="selected" class="selectpicker" value="PRODED">PRODED</option>
                        <option class="selectpicker" value="SNI 0">PRODED/Candidato</option>
                        <option class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option class="selectpicker" value="Emérito">Emérito</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> tipo_prof == "Candidato")    
                        <option class="selectpicker" value="PRODED">PRODED</option>
                        <option selected="selected" class="selectpicker" value="Candidato">PRODED/Candidato</option>
                        <option class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option class="selectpicker" value="Emérito">Emérito</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif    

                    @if($profesor -> tipo_prof == "SNI 1")    
                        <option class="selectpicker" value="PRODED">PRODED</option>
                        <option class="selectpicker" value="Candidato">PRODED/Candidato</option>
                        <option selected="selected" class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option class="selectpicker" value="Emérito">Emérito</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif  

                    @if($profesor -> tipo_prof == "SNI 2")    
                        <option class="selectpicker" value="PRODED">PRODED</option>
                        <option class="selectpicker" value="Candidato">PRODED/Candidato</option>
                        <option class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option selected="selected" class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option class="selectpicker" value="Emérito">Emérito</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif  

                    @if($profesor -> tipo_prof == "SNI 3")    
                        <option class="selectpicker" value="PRODED">PRODED</option>
                        <option class="selectpicker" value="Candidato">PRODED/Candidato</option>
                        <option class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option selected="selected" class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option class="selectpicker" value="Emérito">Emérito</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> tipo_prof == "Emerito")    
                        <option class="selectpicker" value="PRODED">PRODED</option>
                        <option class="selectpicker" value="Candidato">PRODED/Candidato </option>
                        <option class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option selected="selected"class="selectpicker" value="Emérito">Emérito</option>
                        <option  class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> tipo_prof == "N/A")    
                        <option class="selectpicker" value="PRODED">PRODED</option>
                        <option class="selectpicker" value="Candidato">PRODED/Candidato </option>
                        <option class="selectpicker" value="SNI 1">PRODED/SNI Nivel 1</option>
                        <option class="selectpicker" value="SNI 2">PRODED/SNI Nivel 2</option>
                        <option class="selectpicker" value="SNI 3">PRODED/SNI Nivel 3</option>
                        <option class="selectpicker" value="Emérito">Emérito</option>
                        <option selected="selected" class="selectpicker" value="N/A">No Aplica</option>
                    @endif                                                   
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Grado Academíco:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="grad_acad" >
                        <option selected disabled value="00">Seleccione una opcion</option>
                    @if($profesor -> grad_acad == "Doctorado")    
                        <option selected="selected" class="selectpicker" value="Doctorado">Doctorado</option>
                        <option class="selectpicker" value="Maestro">Maestro</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif
                    @if($profesor -> grad_acad == "Maestro")    
                        <option class="selectpicker" value="Doctorado">Doctorado</option>
                        <option selected="selected" class="selectpicker" value="Maestro">Maestro</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif      
                    @if($profesor -> grad_acad == "N/A")    
                        <option class="selectpicker" value="Doctorado">Doctorado</option>
                        <option class="selectpicker" value="Maestro">Maestro</option>
                        <option selected="selected" class="selectpicker" value="N/A">No Aplica</option>
                    @endif              
                      </select>                  
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Estudios Academicos:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Ultimo Grado de estudios alcanzado" name="est_acad" required="" value="{{$profesor->est_acad}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Cuerpo Academíco:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="cuerpo_acad" >
                        <option  selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor -> cuerpo_acad == "UAZ-CA-26")
                        <option selected="selected" class="selectpicker" value="UAZ-CA-26">Ciencias Nucleares UAZ-CA- 26</option>
                        <option class="selectpicker" value="UAZ-CA-1">Radiobiología UAZ-CA-1 </option>
                        <option class="selectpicker" value="N/A">No Aplica</option>   
                    @endif
                    @if($profesor -> cuerpo_acad == "UAZ-CA-1")
                        <option class="selectpicker" value="UAZ-CA-26">Ciencias Nucleares UAZ-CA- 26</option>
                        <option selected="selected" class="selectpicker" value="UAZ-CA-1">Radiobiología UAZ-CA-1 </option>
                        <option class="selectpicker" value="N/A">No Aplica</option>   
                    @endif
                    @if($profesor -> cuerpo_acad == "N/A")
                        <option class="selectpicker" value="UAZ-CA-26">Ciencias Nucleares UAZ-CA- 26</option>
                        <option class="selectpicker" value="UAZ-CA-1">Radiobiología UAZ-CA-1 </option>
                        <option selected="selected" class="selectpicker" value="N/A">No Aplica</option>   
                    @endif

                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Linea de Generación y Aplicación del Conocimiento (LGAC):</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary" name="lgac" required="">
                        <option  selected disabled value="000">Seleccione una opcion</option>
                    @if($profesor -> lgac == "Estudio y Aplicación de las Radiaciones")
                        <option selected="selected" class="selectpicker" value="Estudio y Aplicación de las Radiaciones">Estudio y Aplicación de las Radiaciones.</option>
                        <option class="selectpicker" value="Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto">Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif

                    @if($profesor -> lgac == "Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto")
                        <option class="selectpicker" value="Estudio y Aplicación de las Radiaciones">Estudio y Aplicación de las Radiaciones.</option>
                        <option selected="selected" class="selectpicker" value="Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto">Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto</option>
                        <option class="selectpicker" value="N/A">No Aplica</option>
                    @endif  

                    @if($profesor -> lgac == "N/A")
                        <option class="selectpicker" value="Estudio y Aplicación de las Radiaciones">Estudio y Aplicación de las Radiaciones.</option>
                        <option class="selectpicker" value="Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto">Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto</option>
                        <option selected="selected" class="selectpicker" value="N/A">No Aplica</option>
                    @endif       
                      </select>                  
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