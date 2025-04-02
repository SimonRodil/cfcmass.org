<?php include "../../mod/config.php"; include "../../mod/users.php"; session_start();

error_reporting(0);

# Chequeo que no haya iniciado sesión.
if(isset($_SESSION['sert_cpanel']['id']) && !empty($_SESSION['sert_cpanel']['id'])) { header ('Location: index.php'); } else {
  
  ### En caso de que no haya iniciado sesión.
  
  if(!empty($_POST['username']) && !empty($_POST['password'])) {
  
    # Recibo los valores.
    $username = $_POST['username'];
    $password = password($_POST['password']);
    
    # Me conecto y busco. Si existe la base de datos.
    $con_users = new Users();
    $search = $con_users->SelUser($username);
    
    # Chequea que exista ese registro en la base de datos
    if($search->num_rows > 0) {
      
      # Inserto el usuario en un array.
      $user = $search->fetch_array();
      
      # Comparo contraseñas.
      if($password == $user['password']) {
        
        # Inserto las variables en la sesión.
        $_SESSION= array (
          
          'sert_cpanel' => array(
            
            "id" => $user['id'],
            "username" => $user['username'],
            "password" => $user['password'],
            "email" => $user['email'],
            "name" => $user['name'],
            "lastname" => $user['lastname'],
            "rank" => $user['rank']
            
          )
          
        );
        
        LogReport("Inició Sesión: " . $user['username']);
        
        # Creo una cookie para la sesión.
        if(isset($_POST['remember']) && !empty($_POST['remember'])) { 
        
          # Valores: nombre: ry_session;; valor: md5(username);; tiempo de expiración: un año.
          setcookie("sert_session", $user['username'], time() + (86400 * 365), "/");
          
        }
        
        # Todo bien. END.
        echo "success";
        
      # En caso de que las contraseñas no sean iguales arrojará error.
      } else { session_destroy(); echo "error-password"; LogReport("La contraseña fué Incorrecta, Intentó ingresar como: " . $_POST['username'] . " y contraseña: " . $_POST['password']); }
      
    # En caso de que no exista el registro arrojará error.  
    } else { session_destroy(); echo "error-rows-0"; LogReport("Intentó ingresar como: " . $_POST['username'] . " y contraseña: " . $_POST['password']); }
  
  # En caso de que esten vacios los campos arrojará error.
  } else { session_destroy(); echo "error-empty"; }
  
} # End.

?>