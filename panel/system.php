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
          <h1>Configuración Principal de la Página Web</h1>
          <hr>
          <section style="padding-bottom: 20px">
            <div class="row">
              <div class="col-md-12">
                <form role="form" id="settings-form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Titulo</label>
                            <input type="text" name="title" value="<?= $system['title'] ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="slogan">Subtitulo / Eslogan</label>
                            <input type="text" name="slogan" value="<?= $system['slogan'] ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Logo en Blanco</label>
                            <div class="img-bordered" style="background: black; padding: 20px; margin-bottom: 10px"><img src="../images/logo-v2.png" class="img-responsive" id="img-logo"></div>
                            <input type="file" name="logo">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Logo en Contraste / Colores</label>
                            <div style="padding: 20px; margin-bottom: 10px"><img src="../images/logo-black-v2.png" class="img-responsive" id="img-logo-black"></div>
                            <input type="file" name="logo-black">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="well well-sm">
                                <p>El tamaño de ambos logos debe ser de: <u>653px x 154px</u></p>
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
    <script src="summernote/summernote.js"></script>
    <script type="text/javascript">
        // Submit the form
        $('#settings-form').submit(function(e){
            
            e.preventDefault();
            
            var $btn = $(this).find('button[type=submit]');
            var $btnText = $(this).find('button[type=submit]').html();
            
            var $FormData = new FormData(this);
            
            $.ajax({
                url: '../dri/panel/upd-system.php',
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
        
        // logo's preview.
        function readURL(input, id_preview_div) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $(id_preview_div).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
        
        $("[name=logo]").change(function() {
          readURL(this, '#img-logo');
        });
        
        $("[name=logo-black]").change(function() {
          readURL(this, '#img-logo-black');
        });

  </script>
</body>
</html>