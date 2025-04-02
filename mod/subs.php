<?php

class Subs {
  
  public function SelSub ($input) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM subs WHERE `email` = '$input' OR `id` = '$input' LIMIT 1";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function SelSubs() {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM `subs`";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
    
  }
  
  public function NewSub($email, $ip) {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $query = $con->prepare("INSERT INTO `subs`(`email`, `ip`) VALUES (?, ?)");
    $query->bind_param("ss", $email, $ip);
    
    # Solicito la consulta.
    $query->execute();
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close(); $query->close();
    
  }
  
  public function DelSub ($input) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "DELETE FROM subs WHERE `email` = '$input' OR `id` = '$input'";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
} 

?>