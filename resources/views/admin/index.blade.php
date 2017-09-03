 @extends('layouts.admin')

@section('content')


<div class="row">
<h1 style="text-align: center;">BIENVENIDO</h1>
  <div class="col-sm-4">
    <h4> Datos de Sesión:</h4>

      <?php
        date_default_timezone_set('America/Monterrey');
      ?>

      <strong>Fecha de inicio:</strong> <?=date('d/m/y ');?> <br>
      <strong>Correo:</strong>  {{Session::get('email')}}<br>
      <strong>Nombre:</strong> {{Session::get('name')}} 
    
  </div>
  <!-- Start  -->
  <div class="col-sm-3">
  
  </div>
  <!-- End  -->
  <!-- Start  -->
  <div class="col-sm-4">
    <h4>Estudios nucleares</h4>
    <label class="text" >
      Ir a la p&aacutegina oficial de <br> <a href="http://estudiosnucleares.com.mx/" target="_blank"><strong>Estudios Nucleares.</strong></a>  
    </label><br>
    <a href="http://estudiosnucleares.com.mx/">
      <img src="img/logo-uaen-small.jpg">
    </a>
  </div>
  <!-- End  -->
</div>

@stop

