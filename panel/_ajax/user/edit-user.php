<?php include ("../../../mod/config.php");
include ("../../../mod/users.php");

# Preparo la conexión.
$con_users = new Users();
$query = $con_users->SelUser($_GET['id']);

# Chequeo que sea correcta la petición.
if($query == TRUE) {
  
  # Si hay almenos 1 registrado con ese nombre.
  if($query->num_rows > 0) { 
  $user = $query->fetch_array(); ?>

              <form role="form" id="form-edit-user">
                <div class="error" style="display: none">
                  <div class="alert alert-warning">
                    <!-- Aqui se mostrará el error -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" value="<?= $user['username']; ?>">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" value="<?= $user['email']; ?>">  
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>¿Desea cambiar su contraseña?</label>
                      <div class="form-group">
                        <input type="radio" id="yes-change" name="chg-password"> <label> Si</label><br>
                        <input type="radio" id="no-thx" checked name="chg-password"> <label> No</label>
                      </div>
                    </div>
                  </div>
                  <div class="change-password" style="display: none">
                    <div class="col-md-6 margin-bottom-15">
                      <label for="password_1">Nueva Contraseña</label>
                      <input type="password" class="form-control" id="password_1" placeholder="Nueva Contraseña">  
                    </div>
                    <div class="col-md-6 margin-bottom-15">
                      <label for="password_2"> (<i>Dejar en blanco si no lo desea</i>)</label>
                      <input type="password" class="form-control" id="password_2" placeholder="Confirme Nueva Contraseña">  
                    </div>                    
                  </div>
                </div>
            </form>
            
  <?php } else { echo "El usuario solicitado no existe."; }
  
} else { echo $query; }

?>