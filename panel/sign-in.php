<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(isset($_SESSION['sert_cpanel']) && !empty($_SESSION['sert_cpanel'])) { header('Location: index.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');

# Chequeo que haya o no la cookie para iniciar sesión.
if(isset($_COOKIE['sert_session']) && !empty($_COOKIE['sert_session'])) { 

  # Incluyo los archivos necesarios.
  require ('../mod/users.php');
  require ('../dri/panel/signin-cookie.php');
  
  # Ejecuto la función para Iniciar la sesión con la información que tengo.
  $sign_in = IniciarSesionMedianteCookie($_COOKIE['sert_session']);
  
  if($sign_in == TRUE) { header('Location: index.php'); }

}

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SERT - cPanel</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1><?= $system['title'] ?> - Panel de Control</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
      <form class="form-horizontal templatemo-signin-form" action="../dri/panel/sign-in.php" role="form" method="post" id="sign-in-form">
        <div class="alert alert-warning" style="display: none"></div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Usuario</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario / Correo Electrónico..." maxlength="75">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="password" placeholder="Introduce tu contraseña...">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" id="remember" value="1"> Mantener sesión iniciada
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Iniciar Sesión</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="js/jquery.min.js"></script><!-- jQuery -->
  <script src="js/sign-in.js"></script><!-- Inicio de Sesión -->
</body>
</html>