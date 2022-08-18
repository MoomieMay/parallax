    <div>
        <img src="img/3.png" height="100" width="100%">
    </div>
<nav class="navbar navbar-inverse" style="margin-bottom: 5px">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand glyphicon glyphicon-home" href=""></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                                if (!isset($_SESSION['logueado']) || ($_SESSION['logueado'] != 2019)){
                            ?>
                            <li><a href="" data-toggle="modal" data-target="#modalLogeate">Cancha</a></li>
                                <?php
                            } ?>
                            <?php
                                if (!isset($_SESSION['logueado']) || ($_SESSION['logueado'] != 2019)){
                            ?>
                            <li><a href="" data-toggle="modal" data-target="#modalLogeate">Quincho</a></li>
                                <?php
                            } ?>
                            <?php
                                if (!isset($_SESSION['logueado']) || ($_SESSION['logueado'] != 2019)){
                            ?>
                            <li><a href="" data-toggle="modal" data-target="#modalLogeate">Parrilla</a></li>
                                <?php
                            } ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acerca de <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="" data-toggle="modal" data-target="#modalQuienesSomos">Quienes Somos</a></li>
                            <li><a href="" data-toggle="modal" data-target="#myModal">Contacto</a></li>
                            <li><a href="" data-toggle="modal" data-target="#modalTYC" >Políticas de Uso</a></li>
                      </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="files/login.php" role="button">Ingresar <span class="glyphicon glyphicon-user" ></span></a>
                    </li>
                </ul> 
            </div>
        </div>
    </nav>

<!--------------------------------------  MODALES -------------------------------------->

<!--Modal: Quienes Somos -->
<div class="modal fade" id="modalQuienesSomos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div id="fondoModalLogin" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Quienes Somos</h4>
            </div>
            <div class="modal-body">
                <h4>El Viejo de la Cancha</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal: Contactenos -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contactenos</h4>
      </div>
      <div class="modal-body">
        
          <div class="container">
            <div class="row text-center">
                <div class="first-box col-md-4">
                    <h1><span class="glyphicon glyphicon-earphone"></span></h1>
                    <h3>Teléfono</h3>
                    <p>+880-1700-987654</p><br>
                </div>
                <div class="second-box col-md-4">
                    <h1><span class="glyphicon glyphicon-home"></span></h1>
                    <h3>Ubicación</h3>
                    <p>1036 Gulshan Road</p><br>
                </div>
                    <div class="third-box col-md-4">
                        <h1><span class="glyphicon glyphicon-send"></span></h1>
                        <h3>E-mail</h3>
                        <p>elviejo@gmail.com</p><br>
                    </div>
                </div>
            </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!--Modal: Términos y Condiciones de Servicios -->
<div class="modal fade" id="modalTYC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div id="fondoModalLogin" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Políticas de uso</h4>
            </div>
            <div class="modal-body">
                <h4>Términos y Condiciones</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h4>Penalidades </h4>
                <p>
                    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                </p>
                <h4>FAQ</h4>
                <p>
                    Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal: Advertencia de Login-->
<div class="modal fade" id="modalLogeate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div id="fondoModalLogin" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tenes que Logear o Registrate</h4>
            </div>
            <div class="modal-body">
                <h4>Login</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" >Iniciar Sesión o Regístate</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
