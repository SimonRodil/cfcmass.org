<?php 

require ('../../mod/config.php');
require ('../../mod/contact.php');

# Chequeo que no vengan campos vacios.
if(!isset($_POST) || empty($_POST['email']) || empty($_POST['message']) || empty($_POST['name']) || empty($_POST['subject'])) { echo "error-empty"; return; }

# Declaro las variables.
$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$con_contact = new Contact();

# Filtro de validación
if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { echo "error-filter"; return; }

# Chequeo que no este registro en el sistema. (NO NECESARIO)
# Realizo la consulta.
$query = $con_contact->NewMessage($name, $email, $subject, $message);

# Chequeo que haya sido exitosa o no.
if($query != TRUE) { echo "error-query"; return; }
echo "success";

?>