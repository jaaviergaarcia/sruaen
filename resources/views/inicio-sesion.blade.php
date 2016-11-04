<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Sistema RUAEN</title>
  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>
    <div class="login-form">
      <form action="entrar" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @if(Session::has('message'))
              <div  class="alert alert-{{Session::get('class')}}"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     {{ Session::get('message')}} 
              </div>
          @endif
            <div class="top">
              <img src="img/logo-uaen-small.jpg" alt="icon" class="icon">
              
              <h2>Bienvenido</h2>
            </div>
            <div class="form-area">
                <div class="group">
                  <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus="">
                  <i class="fa fa-user"></i>
                </div>

                <div class="group">
                  <input type="password" name="pass" class="form-control" placeholder="Password" required="" value="">
                  <i class="fa fa-key"></i>
                </div>
                <!--
                <div class="group">
                <label>Seleccione su tipo de usuario</label>                
                  <select class="selectpicker" data-style="btn-primary" name="tipo" required="">
                      <option selected disabled value="000">Seleccione una opcion</option>
                      <option value="A">Administrador</option>
                      <option value="C">Común</option>
                  </select>                  
                </div>  
                -->
                <div class="group">
                   <button type="submit" class="btn btn-default btn-block">Entrar</button>       	
                </div>               
            </div>        
      </form>
    </div>

</body>
</html>