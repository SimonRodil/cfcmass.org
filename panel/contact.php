<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');
include ('../mod/contact.php');
$con_contact = new Contact();
$con_reply = new Reply();

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SERT - cPanel</title>
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <link href="summernote/summernote.css" rel="stylesheet"><!-- Summernote -->
	<style>
		blockquote {
			border-left: 3px #eaeaea solid !important;
			padding-left: 10px;
		}
	</style>
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
          <h1>Sistema de Mensajes</h1>
          <p>Te encuentras en el sistema de mensajes, donde tendrás el acceso de poder ver, responder, eliminar y analizar los mensajes que hayan sido registrados al sistema, te invitamos a que si se te presenta algún error en la navegación de esta sección <a href="report.php">reportalo</a> para que sea revisado el caso de manera profunda y mejorar tu navegación en el sistema.</p>     
          <hr>
          <?php if(!isset($_GET['action']) && !isset($_GET['id'])) { ?>
          <section title="Lista de Mensajes">
            <div class="row">
              <div class="col-md-12">
                <h3>Lista de Mensajes</h3>
                <div class="table-responsive">
                  <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Correo Electrónico</th>
                        <th>Asunto</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $query = $con_contact->SelMessages();
                      if($query->num_rows > 0) {
                      while($message = $query->fetch_array()) { ?>
                      <tr>
                        <td><?= $message['id'] ?></td>
                        <td><?= $message['name'] ?></td>
                        <td><?= $message['registered'] ?></td>
                        <td>
                          <a href="?action=view&id=<?= $message['id'] ?>" class="btn btn-success" type="button"><i class="fa fa-eye"></i></a>
                          <a href="?action=reply&id=<?= $message['id'] ?>" class="btn btn-primary" type="button"><i class="fa fa-reply"></i></a>
                          <a href="javascript:;" data-toggle="modal" data-target="#delete-post" data-id="<?= $message['id'] ?>" class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>              
                      <?php } } else { ?><tr><td colspan="5" class="text-center lead">No hay información disponible.</td></tr><?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <?php } elseif($_GET['action'] == 'view' && (isset($_GET['id']) && !empty($_GET['id']))) { 
            # ID.                                                                                        
            $id = $_GET['id'];
            # Busco la publicación para referirla.
            $message = $con_contact->SelMessage($id)->fetch_array();
          ?>
          <section>
            <div class="row">
              <div class="col-md-12 margin-bottom-30">
								<div class="well">
									<div class="row">
										<div class="col-md-4"><b>Nombre:</b> <?= $message['name'] ?></div>
										<div class="col-md-4"><b>E-mail:</b> <?= $message['email'] ?></div>
										<div class="col-md-4"><b>Fecha de Registro:</b> <?= $message['registered'] ?></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<blockquote>
											<h3><?= $message['subject'] ?></h3>
											<hr>
											<p><?= $message['message'] ?></p>
										</blockquote>
									</div>
								</div>
                <hr>
                <a href="?action=reply&id=<?= $message['id'] ?>" class="btn btn-success"><i class="fa fa-reply"></i> Responder</a>
                <a href="javascript:;" data-toggle="modal" data-target="#delete-post" data-id="<?= $message['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
              </div>
            </div>
          </section>
          <?php } ?>
        </div>
      </div>
      
      <?php include('inc/modal-logout.php'); ?>
      
      <!-- Eliminar Posr -->
      <div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="EliminarPost" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
              <h4 class="modal-title" id="myModalLabel">¿Seguro que desea realizar esta acción?</h4>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger" style="display: none"></div>
            </div>
            <div class="modal-footer">
              <a href="javascript:;" data-action="delete-post" class="btn btn-primary">Sí</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
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
    <script src="js/posts.js"></script>
    <script type="text/javascript">
    // check the summernote
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</body>
</html>