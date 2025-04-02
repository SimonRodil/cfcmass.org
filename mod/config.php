<?php
class MySQL {
  
  # Datos para la base de datos
  public $host = "localhost";
  public $user = "dayson_admin";
  public $pass = "dayson_admin";
  public $data = "dayson_cfcma_v2";
  
  # Función para conectarse
  public function Connect() {
    
    # La conexión a la base de datos.
    $mysqli = new mysqli($this->host, $this->user, $this->pass, $this->data);
    
    # Si es correcta la conexión, todo normal. Sinó devolvera el error.
    if($mysqli == TRUE) { return $mysqli; } else { return $mysqli->connect_error; }
    
  }
  
}

function LogReport($message) {
  
  # Me conecto a la base de datos.
  $database = new MySQL;
  $con = $database->Connect();
  
  # Preparo las variables.
  $ip = $_SERVER['REMOTE_ADDR'];
  
  # El nombre de usuario del que está registrando la acción.
  $username = $_SESSION['sert_cpanel']['username'];
  
  # El navegador del usuario.
  $browser = get_browser(null, true);
  $browser2 = $browser['browser'] . ' ' . $browser['version'] . ', ' . $browser['platform'];
  
  # Preparo la sentencia SQL.
  $sql = "INSERT INTO `logs_cpanel` VALUES (NULL, '$ip', '$browser2', '$username', '$message', NULL)";
  
  # Inserto el LOG.
  $query = $con->query($sql);
  
  # Devuelvo el resultado.
  return $query;
  
  # Cierro las conexiones.
  $con->close();
  
}


# Busco los datos del sistema.
$con_system = new MySQL();
$query = $con_system->Connect()->query("SELECT * FROM `system` LIMIT 1");
$system = $query->fetch_array();

?>