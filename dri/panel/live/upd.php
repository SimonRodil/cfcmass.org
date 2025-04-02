<?php session_start();

# Chequeo que no haya iniciado sesión.
if(!isset($_SESSION['sert_cpanel']['id']) || empty($_SESSION['sert_cpanel']['id'])) { header ('Location: sign-in.php'); } else {
  
  include "../../../mod/config.php";
  include "../../../mod/live.php";
  
  # Establezco conexión con la base de datos.
  $con_live = new Live();
    
  # Chequeamos que el titulo no esté vacio.
  if(isset($_POST['code'])) {
    
		# Declaro las variables.
		$code = $_POST['code'];
		
		# Ejecuto la consulta.
		$query = $con_live->UpdLive($code);
		
		if($query == TRUE) { echo 'success'; return; }
		else { echo "error-query"; return; }
				
  } else { echo "error-empty"; }
  
}

?>