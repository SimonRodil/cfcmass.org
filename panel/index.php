<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SERT - cPanel</title>
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1><?= $system['title'] ?> - Panel de Control</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Menú</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <h3 class="text-center"><i class="fa fa-cog fa-spin"></i></h3>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li class="active">Inicio</li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="posts.php">Tarjetas</a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#sign-out">Cerrar Sesión</a></li>
          </ol>
          <h1>Inicio</h1>
          <p>Bienvenidos al Inicio del Panel de Control, te damos la bienvenida a el panel de control, donde podras gestionar los recursos contratados a la empresa, te pedimos que <a href="report.php">reportes algún error</a> que encuentres, ya que nos encontramos en fase beta.</p>
          
          <div class="row">
            <div class="col-md-12">
              <div class="well">
                Aqui va el Codigo de Google Analytics.
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php include('inc/modal-logout.php'); ?>
      
      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Todos los derechos reservados. &copy; <y></y> Simón Rodil cPanel v1.0</p>
        </div>
      </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
</body>
</html>