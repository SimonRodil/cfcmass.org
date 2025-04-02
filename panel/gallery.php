<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');
include ('../mod/gallery.php');
$con_gallery = new Gallery();

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SERT - cPanel</title>
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <link href="summernote/summernote.css" rel="stylesheet"><!-- Summernote -->
  <style type="text/css">
    .selectable { cursor: pointer; }
    .selected {
      padding: 2%;
      background: rgba(32, 139, 32, 0.83);
      transition: 250ms all ease-in-out;
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
          <h1>Sistema de Galeria</h1>
          <p>Te encuentras en el sistema de mensajes, donde tendrás el acceso de poder ver, subir y borrar los elementos que hayan sido registrados al sistema, te invitamos a que si se te presenta algún error en la navegación de esta sección <a href="report.php">reportalo</a> para que sea revisado el caso de manera profunda y mejorar tu navegación en el sistema.</p>     
          <hr>
          <?php if(!isset($_GET['action']) && !isset($_GET['id'])) { ?>
          <div>
            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills">
                  <li class="active"><a href="javascript:;" data-toggle="modal" data-target="#new-item"><i class="fa fa-plus"></i> Nuevo Elemento</a></li>
                  <li><a href="javascript:;" class="btn btn-danger" data-toggle="modal" data-target="#delete-items" id="delete-items-button" style="display: none; border: 0"><i class="fa fa-trash-o"></i> Eliminar Elementos</a></li>
                </ul>          
              </div>
            </div>
          </div>
          <section title="Lista de Elementos">
            <div class="row">
              <div class="col-md-12">
                <h3>Vista de Elementos</h3>
                <div class="row" id="elements-list">
                  <?php 
                  
                  # Solicito ver los elementos.
                  $query = $con_gallery->SelItems();
  
                  # Chequeo que si haya.
                  if($query->num_rows > 0) {
                                                                    
                  # Muestro los elementos.
                  while($item = $query->fetch_array()) {
                    
                  ?>
                  <div class="col-md-3">
                    <div class="well">
                        <img src="../images/gallery/<?= $item['image'] ?>" class="img-thumbnail img-responsive" image="<?= $item['id'] ?>">
                        <hr>
                        <button type="button" class="btn btn-danger btn-block" data-id="<?= $item['id'] ?>" data-action="delete"><i class="fa fa-trash-o"></i> Eliminar</button>
                    </div>
                  </div>
                  <?php } } else { ?>
                  <div class="col-md-12">
                    <p class="well well-sm">No hay elementos disponibles en la tabla.</p>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </section>
          <?php } ?>
        </div>
      </div>
      
      <?php include('inc/modal-logout.php'); ?>
      
      <!-- Nuevo Elemento -->
      <div class="modal fade" id="new-item" tabindex="-1" role="dialog" aria-labelledby="SubidaElemento" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
              <h4 class="modal-title" id="myModalLabel">Subida de Elemento(s)</h4>
            </div>
            <div class="modal-body">
              <form action="../dri/panel/gallery/new.php" method="post" role="form" id="form-new-element">
                <div class="alert alert-danger" style="display: none"></div>
                <div class="form-group">
                  <label for="element">Seleccione</label>
                  <input type="file" accept="image/*" name="image" id="element"><br>
                  <p class="well well-sm"><em>Las imagenes deben tener la medida de: 1024px * 682px</em></p>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" form="form-new-element" class="btn btn-primary"><i class="fa fa-check"></i> Aceptar</button>
              <button type="reset" form="form-new-element" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
    <script src="js/gallery.js"></script>
    <script type="text/javascript">
  </script>
</body>
</html>