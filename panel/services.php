<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');
include ('../mod/services.php');
$con_services = new Services();

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SERT - cPanel</title>
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <link href="summernote/summernote.css" rel="stylesheet"><!-- Summernote -->
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
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Contacto</li>
            <li><a href="posts.php">Tarjetas</a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#check2" data-controls-modal="#check2" data-backdrop="static" data-keyboard="false">Cerrar Sesión</a></li>
          </ol>
          <h1>Sistema de Servicios</h1>
          <p>Te encuentras en el sistema de servicios, donde tendrás el acceso de poder ver, modificar, activar/desactivar algunos de los servicios que estan disponibles en tu plan que hayan sido registrados al sistema, te invitamos a que si se te presenta algún error en la navegación de esta sección <a href="report.php">reportalo</a> para que sea revisado el caso de manera profunda y mejorar tu navegación en el sistema. Si deseas obtener alguno, porfavor ponte e ncontacto con tu programador o desarrollador para acordar una instalación del servicio</p>     
          <hr>
          <?php if(!isset($_GET['service'])) {
          $query = $con_services->SelServices(); ?>
          <section title="Lista de Servicios">
            <div class="row">
              <div class="col-md-12">
                <h3>Lista de Servicios</h3>
                <div class="row">
                  <?php while($service = $query->fetch_array()) { ?>
                  <div class="col-md-3">
                    <a href="?service=<?= $service['shortcut'] ?>"><h3 class="well"><i class="fa fa-<?= $service['icon'] ?>"></i> <?= $service['title']; ?></h3></a>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </section>
          <?php } elseif(isset($_GET['service']) && !empty($_GET['service'])) { 
            # ID.                                                                                        
            $service = $_GET['service'];
            # Busco el servicio para referirla.
            $query = $con_services->SelService($service);
            # Chequeo que si exista.
            if($query->num_rows < 1) { header ('Location: index.php'); } else { $service = $query->fetch_array(); }
          ?>
          <section title="Vista de Servicio Individual" id="s-service" status="<?= $service['estatus'] ?>" service="<?= $service['shortcut'] ?>">
            <div class="row">
              <div class="col-md-12 margin-bottom-30">
                <h3>Servicio: <?= $service['title'] ?></h3>
                <button type="button" class="btn btn-default" title="Activar/Desactivar" id="switch-button"><i class="fa fa-power-off"></i></button>
                <div id="ajax-get-service" style="display:none">
                  <h3><i class="fa fa-cog fa-spin"></i></h3>
                </div>
              </div>
            </div>
          </section>
          <?php } ?>
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
    <script src="js/templatemo_script.js"></script>
    <script src="summernote/summernote.js"></script>
    <script src="js/services.js"></script>
    <script type="text/javascript">
    // check the summernote
    /* $(document).ready(function() {
      $('#summernote').summernote();
    }); */
    </script>
</body>
</html>