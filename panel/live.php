<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');
require ('../mod/live.php');
$con_live = new Live();
$live = $con_live->SelCode()->fetch_array();

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
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="posts.php">Tarjetas</a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#check2" data-controls-modal="#check2" data-backdrop="static" data-keyboard="false">Cerrar Sesión</a></li>
          </ol>
          <h1>Funciones En Vivo</h1>
          <p>Te encuentras en el sistema de En Vivo, donde tendrás el acceso de poder ver, modificar, activar/desactivar algunos de los servicios que estan disponibles en tu plan que hayan sido registrados al sistema, te invitamos a que si se te presenta algún error en la navegación de esta sección <a href="report.php">reportalo</a> para que sea revisado el caso de manera profunda y mejorar tu navegación en el sistema. Si deseas obtener alguno, porfavor ponte e ncontacto con tu programador o desarrollador para acordar una instalación del servicio</p>     
          <hr>
					<div class="row">
						<div class="col-md-12 margin-bottom-30">
							<h4>En Vivo</h4>
							<label class="switch" status="<?= $live['status'] ?>">
								<input type="checkbox">
								<span class="slider round"></span>
							</label>
							<hr>
							<form class="row update-code">
								<div class="form-group col-md-6">
									<label for="code-embed">Codigo del Reproductor:</label>
									<textarea class="form-control" rows="8" name="code"><?= trim($live['iframe']); ?></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
								</div>
							</form>
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
    <script src="js/templatemo_script.js"></script>
    <script src="summernote/summernote.js"></script>
    <script type="text/javascript">
    // check the summernote
    $(document).ready(function() {
			
			// live button
			var $status = $('.switch').attr('status');
			if($status == 1) { $('.switch input[type=checkbox]').attr('checked', true); }
			$('.switch .slider').click(function(){
				$.get('../dri/panel/live/change-status.php');
			});
			
      $('.update-code').submit(function(e){
				
				e.preventDefault();

				var $btn = $(this).find('button[type=submit]');
				var $btnData = $btn.html();
				var data = $(this).serialize();

				$.ajax({
					data: data,
					url: '../dri/panel/live/upd.php',
					method: 'POST',
					beforeSend: function(){
						$btn.html('...').attr('disabled', true);
					},
					success: function(data){
						switch (data) {
							case 'success': alert('Codigo actualizado correctamente'); break;
							case 'error-empty': alert('Chequee de rellenar el campo correctamente antes de seguir'); break;
							case 'error-query': alert('ERROR 500. Si el problema persiste, contacte al desarrollador de la plataforma'); break;
						}
						$btn.html($btnData).attr('disabled', false);
					}
				});
				
			});
    });
    </script>
</body>
</html>