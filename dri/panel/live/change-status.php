<?php session_start();

# Chequeo que no haya iniciado sesión.
if(!isset($_SESSION['sert_cpanel']['id']) || empty($_SESSION['sert_cpanel']['id'])) { header ('Location: sign-in.php'); } else {
  
  include "../../../mod/config.php";
  include "../../../mod/live.php";
  
  # Establezco conexión con la base de datos.
  $con_live = new Live();
  $live = $con_live->CheckStatus()->fetch_array();
	
	switch($live['status']) {
		case 0: $con_live->UpdStatus(1); break;
		case 1: $con_live->UpdStatus(0); break;
	}
	
}

?>