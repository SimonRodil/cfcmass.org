<?php 
require "../../mod/config.php"; 
require "../../mod/system.php"; 
session_start();

// para obtener la extension del archivo
function obtener_extension ($archivo) {
    $explode= explode('.', $archivo);
    $extension=array_pop($explode);
    return $extension;
}

header('Content-Type: application/json');


if(isset($_FILES['poster']) && !empty($_FILES['poster']['name'])) {
    
    # Chequeo que sea SVG o PNG.
    if(obtener_extension($_FILES['poster']['name']) != 'jpg') 
    { echo json_encode(['status' => 500, 'message' => 'El poster debe ser de formato "jpg".']); return; }
    
    # Nombo el archivo nuevo.
    $target_path = "../../vide/poster." . obtener_extension($_FILES['poster']['name']);
    
    # Chequeo que haya cargado.
    if(!move_uploaded_file($_FILES['poster']['tmp_name'], $target_path))
    { echo json_encode(['status' => 500, 'message' => 'El poster no pudo ser cargado.']); return; }
    
}

if(isset($_FILES['video']) && !empty($_FILES['video']['name'])) {
    
    # Chequeo que sea SVG o PNG.
    if(obtener_extension($_FILES['video']['name']) != 'mp4') 
    { echo json_encode(['status' => 500, 'message' => 'El video debe ser de formato "mp4".']); return; }
    
    # Nombo el archivo nuevo.
    $target_path = "../../vide/video-bg." . obtener_extension($_FILES['video']['name']);
    
    # Chequeo que haya cargado.
    if(!move_uploaded_file($_FILES['video']['tmp_name'], $target_path))
    { echo json_encode(['status' => 500, 'message' => 'El video no pudo ser cargado. ' . $_FILES['video']['error']]); return; }
    
}

echo json_encode(['status' => 200, 'message' => 'success']);

?>