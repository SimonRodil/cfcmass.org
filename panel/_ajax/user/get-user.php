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
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <tbody>
          <tr style="text-weight: bold">
            <td>Nombre de Usuario</td>
            <td>Correo Electrónico</td>
            <td>Rango</td>
          </tr>
          <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['rank'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } else { echo "El usuario solicitado no existe."; }
  
} else { echo $query; }

?>