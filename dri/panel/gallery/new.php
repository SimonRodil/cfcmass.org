<?php session_start();

header('Content-Type: application/json');

// para obtener la extension del archivo
function obtener_extension ($imagen) {
    $explode= explode('.', $imagen);
    $extension=array_pop($explode);
    return $extension;
}

# Chequeo que no haya iniciado sesión.
if(!isset($_SESSION['sert_cpanel']['id']) || empty($_SESSION['sert_cpanel']['id'])) { header ('Location: sign-in.php'); return; }
  
require "../../../mod/config.php";
require "../../../mod/gallery.php";

# Establezco conexión con la base de datos.
$con_gallery = new Gallery();
$image = md5(date('h:i:s_d/m/Y')) . "." . obtener_extension($_FILES['image']['name']);

# Nombo el archivo nuevo.
$target_path = "../../../images/gallery/" . $image;

# Chequeo que haya cargado.
if(!move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
{ echo json_encode(['status' => 500, 'message' => 'Hubo un error al subir la imagen.']); return; }

$query = $con_gallery->NewImage($image);
if($query['query'] == FALSE) { echo json_encode(['status' => 500, 'message' => 'No se pudo subir la imagen a la base de datos.']); return; }

echo json_encode(['status' => 200, 'id' => $query['id'], 'src' => $query['src']]); return; 

?>