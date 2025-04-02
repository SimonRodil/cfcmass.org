<?php 

# Inicio la sesión.
session_start();

# Chequeo que la sesión haya sido iniciada.
if(!isset($_SESSION['sert_cpanel']) || empty($_SESSION['sert_cpanel'])) { header('Location: sign-in.php'); }

# Incluyo los archivos necesarios.
require ('../mod/config.php');
include ('../mod/posts.php');
$con_posts = new Posts();

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
            <li class="active">Tarjetas</li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#check2" data-controls-modal="#check2" data-backdrop="static" data-keyboard="false">Cerrar Sesión</a></li>
          </ol>
          <h1>Sistema de Tarjetas</h1>
          <p>Te encuentras en el sistema de publicaciones, donde tendrás el acceso de poder crear, modificar, eliminar y analizar las publicaciones que hayan sido subidas al sistema, te invitamos a que si se te presenta algún error en la navegación de esta sección <a href="report.php">reportalo</a> para que sea revisado el caso de manera profunda y mejorar tu navegación en el sistema.</p>     
          <hr>
          <?php if(!isset($_GET['action']) && !isset($_GET['id'])) { ?>
          <section title="Lista de Tarjetas">
          <div class="margin-bottom-30">
            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills">
                  <li class="active"><a href="?action=new"><i class="fa fa-plus"></i> Nueva Tarjeta</a></li>
                </ul>          
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-md-12">
                <h3>Lista de Tarjetas</h3>
                <div class="table-responsive">
                  <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Fecha de Tarjeta</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $query = $con_posts->SelPosts();
                      if($query->num_rows > 0) {
                      while($post = $query->fetch_array()) { ?>
                      <tr>
                        <td><?= $post['id'] ?></td>
                        <td><?= $post['title'] ?></td>
                        <td><?= $post['registered'] ?></td>
                        <td>
                          <a href="?action=view&id=<?= $post['id'] ?>" class="btn btn-success" type="button"><i class="fa fa-eye"></i></a>
                          <a href="?action=edit&id=<?= $post['id'] ?>" class="btn btn-primary" type="button"><i class="fa fa-edit"></i></a>
                          <a href="javascript:;" data-toggle="modal" data-target="#delete-post" data-id="<?= $post['id'] ?>" class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i></a>
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
            $post = $con_posts->SelPost($id)->fetch_array();
          ?>
          <section title="Vista de Tarjetas">
            <div class="row">
              <div class="col-md-12 margin-bottom-30">
                <h3>Ver Tarjeta: <?= $post['title'] ?></h3>
                <hr>
                <img src="../images/posts/<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="img-responsive"><br>
                <h4><?= $post['title'] ?></h4><br>
                <?= $post['content'] ?>
                <hr>
                <a href="?action=edit&id=<?= $post['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                <a href="javascript:;" data-toggle="modal" data-target="#delete-post" data-id="<?= $post['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
              </div>
            </div>
          </section>
          <?php } elseif($_GET['action'] == 'new') { ?>
          <section title="Nueva Tarjeta">
            <div class="row">
              <div class="col-md-12">
                <form action="../dri/panel/posts/new.php" method="post" role="form" id="new-post">
                  <div class="col-md-12 alert alert-danger" style="display: none"></div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-12 form-group">
                              <label for="title">Imagen</label>
                              <input type="file" class="form-control" required id="image" name="image">
                            </div>
                            <div class="col-md-12 form-group">
                              <label for="title">Titulo</label>
                              <input type="text" class="form-control" placeholder="Inserte el titulo acá." required id="title" name="title">
                            </div>
                            <div class="col-md-12 form-group">
                              <label for="title">Enlace</label>
                              <input type="url" class="form-control" placeholder="Inserte el enlace de la tarjeta." required id="url" name="url">
                            </div>
                          </div>
                      </div>
                    <div class="col-md-6">
                      <label for="summernote">Contenido</label>
                      <textarea id="summernote" name="content" required class="form-control" rows="8"></textarea>
                    </div>
                    <div class="col-md-12 margin-bottom-30">
                      <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Aceptar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
          <?php } elseif($_GET['action'] == 'edit' && (isset($_GET['id']) && !empty($_GET['id']))) {             
  
            # ID.                                                                                        
            $id = $_GET['id'];
            # Busco la publicación para referirla.
            $post = $con_posts->SelPost($id)->fetch_array();
  
          ?>
          <section title="Editción de Tarjeta">
            <div class="row">
              <div class="col-md-12">
                <form action="../dri/panel/posts/edit.php?id=<?= $post['id'] ?>" method="post" role="form" id="edit-post">
                  <div class="row">
                    <div class="col-md-12 alert alert-danger" style="display: none"></div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-12 form-group">
                                  <label for="title">Imagen</label>
                                  <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="col-md-12 form-group">
                                  <label for="title">Titulo</label>
                                  <input type="text" class="form-control" placeholder="Inserte el titulo acá." required id="title" name="title" value="<?= $post['title'] ?>">
                                </div>
                                <div class="col-md-12 form-group">
                                  <label for="title">Enlace</label>
                                  <input type="url" class="form-control" placeholder="Inserte el enlace de la tarjeta." required id="url" name="url" value="<?= $post['url'] ?>">
                                </div>
                              </div>
                          </div>
                        <div class="col-md-6">
                          <label for="summernote">Contenido</label>
                          <textarea id="summernote" name="content" required class="form-control" rows="8">
                              <?= $post['content'] ?>
                          </textarea>
                        </div>
                        <div class="col-md-12 margin-bottom-30">
                          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Aceptar</button>
                        </div>
                      </div>
                  </div>
                </form>
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
    <!-- <script type="text/javascript">
    // check the summernote
    $("#total-caracteres").empty();
    $(document).ready(function() {
      $('#summernote').summernote({
		height: "100",
		callbacks: {
		    onKeyup: function(e) {
				var limiteCaracteres = 60;
				var caracteres = $(".note-editable").text();
				var totalCaracteres = caracteres.length;

				//Update value
				$("#total-caracteres").text('Número de caracteres: ' + totalCaracteres);

				//Check and Limit Charaters
				if(totalCaracteres >= limiteCaracteres){
                    $('#total-caracteres').css('color','red');
				} else { $('#total-caracteres').css('color','inherit'); }
		    }
		}	});
    });
  </script> -->
</body>
</html>