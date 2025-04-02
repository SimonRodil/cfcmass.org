<?php

class Users {
  
  public function SelUser ($input) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM users WHERE `username` = '$input' OR `email` = '$input' OR `id` = '$input' LIMIT 1";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function SelUsers() {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM `users`";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
    
  }
  
  public function NewUser($username, $password, $email, $rank) {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $query = $con->prepare("INSERT INTO `users`(`username`, `password`, `email`, `rank`) VALUES (?,?,?,?)");
    $query->bind_param("ssss", $username, $password, $email, $rank);
    
    # Solicito la consulta.
    $query->execute();
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close(); $query->close();
    
  }
  
  public function UpdUser($id, $password, $email, $username) {
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "UPDATE `users` SET `email` = '$email', `username` = '$username'";
    
    if($password != NULL) {
      
      # Ya que hay una contraseña esta irá al sistemas.
      $sql .= ", `password` = '$password'";
      
    }
    
    # Termino la sentencia SQL con la condicional.
    $sql .= " WHERE `id` = '$id'";
    
    # Solicito la consulta.
    $query = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
    
  }
  
  public function DelUser ($input) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "DELETE FROM users WHERE `username` = '$input' OR `email` = '$input' OR `id` = '$input'";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
} 

## Funcion: Cifrar contraseña

function password($input) {
  
  # Pasos de cifrado:
  # 1. Multiplica las palabras 5 veces. Calcula el md5 de la multiplicación.
  # 2. Encripta con el Metodo SALT "RY".
  # 3. Pone en reverso todo lo que ha cifrado para mayor compresión.
  return strrev(crypt(md5(str_repeat($input, 5)), "sert_cpanel"));
  
}

?>