<?php session_start(); 
include ("../mod/config.php");
include ("../mod/users.php");

# Chequeo que no haya iniciado sesión.
if(!isset($_SESSION['sert_cpanel']['id']) || empty($_SESSION['sert_cpanel']['id'])) { header ('Location: sign-in.php'); } 

# Me aseguro de tener los permisos para ver si puedo estar aquí.
if($_SESSION['sert_cpanel']['rank'] < 8) { header ('Location: index.php'); } 

# Busco los usuarios para la tabla.
$con_users = new Users();
$query_table = $con_users->SelUsers();

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SRCP - cPanel</title>
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <link rel="stylesheet" href="datatables/dataTables.bootstrap.css">
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>SRCP - cPanel</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">MENÚ</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="posts.php">Tarjetas</a></li>
            <li><a href="contact.php">Contacto</a></li>
          </ol>
          <h1>Sistema de Usuarios</h1>
          <p>Te encuentras en el sistema de Usuarios, donde tendrás el acceso de poder crear, modificar, eliminar y analizar los usuarios que hayan sido registrados al sistema, te invitamos a que si se te presenta algún error en la navegación de esta sección <a href="report.php">reportalo</a> para que sea revisado el caso de manera profunda y mejorar tu navegación en el sistema.</p>    
          <div class="row">
            <div class="col-md-12">
              <hr>
              <?php if ($_SESSION['sert_cpanel']['rank'] > 8) { ?>
              <button class="btn btn-primary new"><i class="fa fa-plus"></i> Nuevo Usuario</button>
              <?php } ?>
              <hr>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Usuarios</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Usuario</th>
                      <th>Correo Electrónico</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($user = $query_table->fetch_array()){ ?>
                    <tr>
                      <td><?= $user['id']; ?></td>
                      <td><?= $user['username']; ?></td>
                      <td><?= $user['email']; ?></td>
                      <td>
                        <a href="javascript:;" class="btn btn-success view hidden" id="<?= $user['id']; ?>"><i class="fa fa-eye"></i></a>
                        <a href="javascript:;" class="btn btn-primary edit" id="<?= $user['id']; ?>"><i class="fa fa-pencil"></i></a>
                        <?php if($user['id'] != $_SESSION['sert_cpanel']['id'] || $_SESSION['sert_cpanel']['rank'] >= 10 && $query_table->num_rows > 1) { ?>
                        <a href="javascript:;" class="btn btn-danger delete" id="<?= $user['id']; ?>"><i class="fa fa-trash-o"></i></a>
                        <?php } ?>
                      </td>
                    </tr>       
                    <?php } ?>
                  </tbody>
                </table>
              </div> 
            </div>
          </div>
        </div>
      </div>

      <!-- Ver -->
      <div class="modal fade" id="modal-view-user" tabindex="-1" role="dialog" aria-labelledby="VerUusario" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Datos del Usario</h4>
            </div>
            <div class="modal-body">
              <!-- Aqui va el contenido -->
              <p class="text-center h3"><i class="fa fa-spin fa-cog"></i></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Editar -->
      <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="EditarUsuario" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
            </div>
            <div class="modal-body">
              <p class="text-center h3"><i class="fa fa-spin fa-cog"></i></p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" form="form-edit-user"><i class="fa fa-check"></i> Actualizar</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Nuevo Usuario -->
      <div class="modal fade" id="modal-new-user" tabindex="-1" role="dialog" aria-labelledby="NuevoUsuario" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
            </div>
            <div class="modal-body">
              <form role="form" id="new-user">
                <div class="error" style="display: none">
                  <div class="alert alert-warning">
                    <!-- Aqui se mostrará el error -->
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" maxlength="35">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" maxlength="45">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="password_1" placeholder="Nueva Contraseña" maxlength="25">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_2">Confirmar Nueva Contraseña</label>
                    <input type="password" class="form-control" id="password_2" placeholder="Confirme Nueva Contraseña" maxlength="25">  
                  </div>
                  <div class="col-md-12 margin-bottom-15">
                    <label for="email">Rango</label>
                    <select class="form-control" id="rank">
                      <?php for($i = 1; $i <= $_SESSION['sert_cpanel']['rank']; $i++) { ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>         
                <div class="row templatemo-form-buttons">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-primary submit-form"><i class="fa fa-plus"></i> Añadir</button>
                  </div>
                </div>
              </form>            
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-primary" data-aciton="update">Actualizar</button> -->
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Eliminar -->
      <div class="modal fade" id="modal-delete-user" tabindex="-1" role="dialog" aria-labelledby="CerrarSesion" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">¿Seguro deseas Elimnar Usuario?</h4>
            </div>
            <div class="modal-body">
              <div class="error" style="display:none">
                <div class="alert alert-danger">
                  <!-- Aqui irá el mensaje en caso de que haya mensaje -->
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-action="delete-user">Si</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      
      <?php include('inc/modal-logout.php'); ?>

      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Derechos Reservados &reg; <y></y> <?= $system['title']; ?> | SRCP: Simon Rodil Control Panel por <a href="http://simonrodil.org.ve">Simón Rodil</a></p>
        </div>
      </footer>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script src="js/users.js"></script>
  </body>
</html>