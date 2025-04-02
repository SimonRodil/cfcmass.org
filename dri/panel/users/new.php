<?php include "../../../mod/config.php";
include "../../../mod/users.php";
session_start();

$con_users = new Users;

# Chequeo que haya iniciado sesión..
if(!isset($_SESSION['sert_cpanel']['id']) || empty($_SESSION['sert_cpanel']['id'])) { header ('Location: sign-in.php'); }

# Chequeo que no esten vacios los campos..
if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['rank'])) {
  
  # Chequeo que el email sea valido..
  if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) == TRUE) {
    
    # Chequeo que el Email y/o usuario no exista/n en el sistema..
    $check_rows = $con_users->Seluser($_POST['email']);
    $user = $check_rows->fetch_array();
    
    # Me aseguro que no hayan registros a ese nombre..
    if($check_rows->num_rows < 1) {
      
      # Contraseña
      if(!empty($_POST['password'])){ 
      
        # Preparo las variables de los datos.
        $password = password($_POST['password']);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $rank = $_POST['rank'];

        # Envio los datos.
        $create = $con_users->NewUser($username, $password, $email, $rank);

        # Muestro el mensaje, guardo el registro.
        if($create == TRUE) { 

          echo "success"; 
          LogReport("El usuario " . $_SESSION['sert_cpanel']['username'] . " Registró al Usuario: (Usuario: " . $username . ") (Contraseña: " . $_POST['password'] . " -> " . $password . ") (Email: " . $email . ") (Rango: " . $rank . ")"); 

        # Muestro el mensaje de error y lo guardo en los registros.  
        } else { 

          echo $create;
          LogReport("El usuario " . $_SESSION['sert_cpanel']['username'] . " trató de registrar un usuario y le dio el error de actualizar por: " . $create); 

        }
       
      } else { echo "error-password-empty"; }
      
    # Muestro el error y guardo el registro de lo sucedido..
    } else { 
      
      echo "error-user-email"; 
      LogReport("El usuario: " . $_SESSION['sert_cpanel']['username'] . ", Intento registro un usuario con el correo y/o usuario con: " . $_POST['username'] . " - " . $_POST['email'] . ", pero estas ya se encontraban ocupados."); 
      
    }
    
  # Muestro el error..  
  } else { echo "error-email-validate"; }
  
# Muestro el error..
} else { echo "error-empty"; }

?>