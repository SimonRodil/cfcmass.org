<?php

class Services {
  
  public function SelService ($input) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM `services` WHERE `shortcut` = '$input' OR `id` = '$input' LIMIT 1";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function SelServices() {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM `services`";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
    
  }
  
  public function NewService($title, $shortcut, $icon) {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $query = $con->prepare("INSERT INTO `services`(`title`, `shortcut`, `icon`) VALUES (?,?,?)");
    $query->bind_param("sss", $title, $shortcut, $icon);
    
    # Solicito la consulta.
    $query->execute();
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close(); $query->close();
    
  }
  
  public function UpdService($shortcut, $content) {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "UPDATE `services` SET `data` = '$content'";
    
    # Termino la sentencia SQL con la condicional.
    $sql .= " WHERE `shortcut` = '$shortcut'";
    
    # Solicito la consulta.
    $query = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
    
  }
  
  public function UpdEstatus($shortcut, $estatus) {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "UPDATE `services` SET `estatus` = '$estatus'";
    
    # Termino la sentencia SQL con la condicional.
    $sql .= " WHERE `shortcut` = '$shortcut'";
    
    # Solicito la consulta.
    $query = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
    
  }
  
  public function DelService ($input) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "DELETE FROM `services` WHERE `shortcut` = '$input' OR `id` = '$input'";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
} 

?>