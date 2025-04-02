<li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
<?php 

/* Estructura para buscar los Items del menú para el panel de control */

# Solicito los archivos necesarios.
include ('../../mod/config.php');

# Inicio la conexión.
$adb = new MySQL();
$con = $adb->Connect();

# Realizo la consulta.
$query = $con->query("SELECT * FROM menu_panel");

# Variando los resultados para mostrar los items. 
while($item = $query->fetch_assoc()) { ?>
<li><a href="<?= $item['url'] ?>"><i class="fa fa-<?= $item['icon'] ?>"></i><?= $item['title'] ?></a></li>
<?php } ?>
<li><a href="javascript:;" data-toggle="modal" data-target="#sign-out"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>