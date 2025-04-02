<?php 

require ("../mod/config.php");
require ("../mod/live.php");

$con_live = new Live();
$live = $con_live->CheckStatus()->fetch_array();

echo $live['status'];

?>