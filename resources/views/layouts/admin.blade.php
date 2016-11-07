<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Sistema:.:Unidad Academica de Estudios Nucleares</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

  	<!-- Start App Logo -->
  	<div class="applogo">
  		<a href="admin" class="logo">Sistema UAEN</a>
  	</div>
  	<!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

 
    <!-- Start Top Right -->   
    <ul class="top-right">
    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><span class="fa fa-user"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="logout"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>
    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MENÚ</li>
  <li><a href="#"><span class="icon color5"><i class="fa fa-users fa-fw"></i></span>Usuarios<span class="caret"></span></a>
    <ul>
      <li><a href="nuevo_profesor"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
      <li><a href="ver_usuarios"><i class="fa fa-search"></i>Consultar</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color6"><i class="fa fa-newspaper-o"></i></span>Articulo<span class="caret"></span></a>
  <ul>
      <li><a href="nuevo_articulo"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
  </ul>
  </li>
  <li><a href="#"><span class="icon color7"><i class="fa fa-book"></i></span>Libro<span class="caret"></span></a>
  <ul>
      <li><a href="nuevo_libro"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>      
  </ul>
  </li>
  <li><a href="#"><span class="icon color8"><i class="fa fa-list-alt"></i></span>Informe<span class="caret"></span></a>
  <ul>
      <li><a href="nuevo_informe"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>      
  </ul>
  </li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-star-o"></i></span>Distinciones/Premios<span class="caret"></span></a>
    <ul>
      <li><a href="nueva_distincion"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>      
    </ul>
  </li>
  <li><a href="#"><span class="icon color10"><i class="fa fa-file-text-o"></i></span>Desarrollo<span class="caret"></span></a>
  <ul>
      <li><a href="nuevo_desarrollo"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
  </ul>
  </li>
  <li><a href="#"><span class="icon color11"><i class="fa fa-file-o"></i></span>Reseñas<span class="caret"></span></a>
  <ul>
      <li><a href="nueva_resenia"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
  </ul>
  </li>
  <li><a href="#"><span class="icon color8"><i class="fa fa-copyright"></i></span>Patentes<span class="caret"></span></a>
  <ul>
      <li><a href="patente"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
  </ul>
  </li>
  <li><a href="#"><span class="icon color12"><i class="fa fa-font"></i></span>Trabajos<span class="caret"></span></a>
  <ul>
      <li><a href="trabajo"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
  </ul>
  </li>
  <li><a href="#"><span class="icon color14"><i class="fa fa-male"></i></span>Tutorias<span class="caret"></span></a>
  <ul>
      <li><a href="#"><i class="fa fa-plus fa-fw"></i>Agregar</a></li>
     <!-- <li><a href="#"><i class="fa fa-eraser"></i>Eliminar</a></li> -->
  </ul>    
  </li>
</ul>
</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Seleccione que registros desea ver:</h1>
      <ol class="breadcrumb">
        <li><a href="articulos">Articulos</a></li>
        <li><a href="libros">Libros</a></li>
        <li><a href="informes">Informes</a></li>
        <li><a href="distinciones">Distinciones/Premios</a></li>
        <li><a href="desarrollos">Desarrollos</a></li>
        <li><a href="resenias">Reseñas</a></li>
        <li><a href="#">Patentes</a></li>
        <li><a href="#">Trabajos</a></li>
        <li><a href="#">Tutorias</a></li>
        <li><a href="#">Productividad</a></li>
      </ol>
  </div>
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-default">

@yield('content')
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2016 All rights reserved.
  </div>
  
</div>
<!-- End Footer -->

<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="js/bootstrap-select/bootstrap-select.js"></script>
@yield('search')
</body>
</html>