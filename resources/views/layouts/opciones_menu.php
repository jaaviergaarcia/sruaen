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
<!-- Opcion 2-->
<!-- Start Top Right -->
    @if(Session::has('nombre'))
    <ul class="top-right">
    <a>Has iniciado sesi&oacuten como: &nbsp<span class="fa fa-user"></span>&nbsp {{Session::get('nombre')}}</a> |
    <li class="dropdown link"> 
      <a href="#" class="" data-toggle="modal" data-target=".bs-example-modal-sm">Cerrar Session</a>
        <!-- Small modal -->
        <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">            
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Cerrar Sesi&oacuten</h4> 
              </div> 
              <div class="modal-body"><h5><i class="fa fa-question-circle"></i> {{Session::get('nombre')}} esta a punto de salir del sistema, da click en <strong>Salir</strong> para continuar.</h5></div>
              <div class="modal-footer"><a href="logout" class="btn btn-primary btn-block">Salir</a></div> 
            </div>
          </div>
        </div>
    </li>
    </ul>
    @endif
    <!-- End Top Right -->

    <!--Opcion 3-->
    <!-- Start Top Right -->
    @if(Session::has('nombre'))
    <ul class="top-right">
    <a>Has iniciado sesi&oacuten como: &nbsp<span class="fa fa-user"></span>&nbsp {{Session::get('nombre')}}</a> 
    <li class="dropdown link"> 
      <!-- Small modal -->
        <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">            
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Cerrar Sesi&oacuten</h4> 
              </div> 
              <div class="modal-body"><h5><i class="fa fa-question-circle"></i> {{Session::get('nombre')}} esta a punto de salir del sistema, da click en <strong>Salir</strong> para continuar.</h5></div>
              <div class="modal-footer"><a href="logout" class="btn btn-primary btn-block">Salir</a></div> 
            </div>
          </div>
        </div>
    </li>
    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><span class="fa fa-list"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa falist fa-power-off"></i> Cerrar Sesi&oacuten</a></li>
        </ul>
    </li>

    </ul>
    @endif
    <!-- End Top Right -->