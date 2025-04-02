<?php 

require ('../../mod/config.php');
require ('../../mod/subs.php');

# Chequeo que no vengan campos vacios.
if(!isset($_POST) || empty($_POST['email'])) { echo "error-empty"; return; }

# Declaro las variables.
$email = $_POST['email'];
$con_subs = new Subs();

# Filtro de validación
if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { echo "error-filter"; return; }

# Chequeo que no este registro en el sistema.
if($con_subs->SelSub($email)->num_rows) { echo "error-exist"; return; }

# Realizo la consulta.
$query = $con_subs->NewSub($email, $_SERVER['REMOTE_ADDR']);

# Chequeo que haya sido exitosa o no.
if($query != TRUE) { echo "error-query"; return; }
echo "success";

?>