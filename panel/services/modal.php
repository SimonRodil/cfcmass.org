<hr>
<?php 

/* Estructura para el servicio modal */

# Solicito los archivos necesarios.
include ('../../mod/config.php'); 

# Busco el archivo.
$adb = new MySQL();
$con = $adb->Connect();
$query = $con->query('SELECT * FROM `services` WHERE `shortcut` = "modal"');

# Chequeo que si exista el servicio.
if($query->num_rows > 0) {
  
  # Muestro la información.
  $service = $query->fetch_array();

?>
<form role="form" method="post" action="../dri/panel/services/modal.php" id="modal-form">
  <div class="form-group">
    <label for="data">
      Contenido:
    </label>
    <textarea id="summernote" name="data">
      <?= $service['data']; ?> 
    </textarea>
    <!-- <div onload="function(){ $('body').append('<script src='services/modal.js'></script>'); }"></div> -->
    <script>
      $('#summernote').summernote();
    </script>
  </div>
</form>
<?php
  
# Muestro el Error.  
} else { die ('<b><i class="fa fa-warning"></i> Error!</b> No hemos podido encontrar este servicio en la base de datos. Porfavor <a href="report.php">reporta</a> este problema a tu proveedor de servicios web.'); }

?>
