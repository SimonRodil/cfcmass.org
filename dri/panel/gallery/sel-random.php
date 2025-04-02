<?php session_start();

# header('Content-Type: application/json');
  
require "../../../mod/config.php";
require "../../../mod/gallery.php";

$con_gallery = new Gallery();
$query = $con_gallery->SelRandom();
# $result = $query->fetch_all(MYSQLI_ASSOC);
# $result = $query->fetch_assoc();
$i = 0;

foreach ($query as $image) {
    $images[$i] = Array('id' => $image['id'], 'image' => $image['image']);
    $i++;
}

echo json_encode($images);

?>