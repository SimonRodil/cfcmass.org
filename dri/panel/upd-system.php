<?php 
require "../../mod/config.php"; 
require "../../mod/system.php"; 
session_start();

// para obtener la extension del archivo
function obtener_extension ($imagen) {
    $explode= explode('.', $imagen);
    $extension=array_pop($explode);
    return $extension;
}

header('Content-Type: application/json');

$title = trim($_POST['title']);
$slogan = trim($_POST['slogan']);

if(isset($_FILES['logo']) && !empty($_FILES['logo-black']['name'])) {
    
    # Chequeo que sea SVG o PNG.
    if(obtener_extension($_FILES['logo']['name']) != 'png') 
    { echo json_encode(['status' => 500, 'message' => 'El archivo debe ser de formato PNG.']); return; }
    
    # Nombo el archivo nuevo.
    $target_path = "../../images/logo-v2." . obtener_extension($_FILES['logo']['name']);
    
    # Chequeo que haya cargado.
    if(!move_uploaded_file($_FILES['logo']['tmp_name'], $target_path))
    { echo json_encode(['status' => 500, 'message' => 'El logo en blanco no pudo ser cargado.']); return; }
    
}

if(isset($_FILES['logo-black']) && !empty($_FILES['logo-black']['name'])) {
    
    # Chequeo que sea SVG o PNG.
    if(obtener_extension($_FILES['logo-black']['name']) != 'png') 
    { echo json_encode(['status' => 500, 'message' => 'El archivo debe ser de formato PNG.']); return; }
    
    # Nombo el archivo nuevo.
    $target_path = "../../images/logo-black-v2." . obtener_extension($_FILES['logo-black']['name']);
    
    # Chequeo que haya cargado.
    if(!move_uploaded_file($_FILES['logo-black']['tmp_name'], $target_path))
    { echo json_encode(['status' => 500, 'message' => 'El logo en blanco no pudo ser cargado.']); return; }
    
}

$con_system = new System();
$update = $con_system->UpdSystem($title, $slogan);

echo json_encode(['status' => 200, 'message' => 'success']);

?>