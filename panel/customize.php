<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="posts.php">Tarjetas</a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#check2" data-controls-modal="#check2" data-backdrop="static" data-keyboard="false">Cerrar Sesión</a></li>
          </ol>
          <h1>Configuración Principal de la Página Web</h1>
          <hr>
          <section style="padding-bottom: 20px">
            <div class="row">
              <div class="col-md-12">
                <form role="form" id="settings-form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Imagen de Poster (JPG)</label>
                            <input type="file" name="poster">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Video MP4 de Fondo</label>
                            <input type="file" name="video">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="well well-sm">
                                <p>El tamaño de la imagen deber ser de: <u>1280px x 960px</u> y formato <b>JPG</b></p>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="well well-sm">
                                <p>El tamaño del video deber ser de: <b>720p</b>, con formato <b>MP4</b></p>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="well well-sm">
                                <p>Luego de realizar cambios debe borrar el caché de su navegador para ver los cambios efectuados, o esperar 15 minutos que el servidor realice el vaciado de caché automaticamente.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </section>
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
    <script type="text/javascript">
        // Submit the form
        $('#settings-form').submit(function(e){
            
            e.preventDefault();
            
            var $btn = $(this).find('button[type=submit]');
            var $btnText = $(this).find('button[type=submit]').html();
            
            var $FormData = new FormData(this);
            
            $.ajax({
                url: '../dri/panel/customize-index.php',
                method: 'post',
                data: $FormData,
                dataType: 'json',
                beforeSend: function() { $btn.attr('disabled', true).html('<i class="fa fa-cog fa-spin"></i>'); },
                processData: false,
                contentType: false
            }).done(function(data){ 
                
                $btn.attr('disabled', false);
                $btn.html($btnText);
                
                if(data.status == 500) { alert(data.message); return; }
                alert('Los datos han sido actualizados correctamente.');
                $('form').trigger('reset');
                
            });
            
        });

  </script>
</body>
</html>