<?php

class Gallery {
  
  public function NewImage ($image) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "INSERT INTO gallery (image) VALUES ('$image')";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    if($query) { return Array('query' => TRUE, 'id' => $con->insert_id, 'src' => $image); } else { return Array('query' => FALSE); }
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function DelImage ($id) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "DELETE FROM gallery WHERE id = $id";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function SelRandom () { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT id, image FROM gallery ORDER BY RAND() LIMIT 4";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function SelItem ($id) { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM gallery WHERE id = $id";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
  public function SelItems () { 
    
    # Conecto a la base de datos.
    $adb = new MySQL();
    $con = $adb->Connect();
    
    # La sentencia SQL permite realizar la cadena de lo que queremos consultar.
    $sql = "SELECT * FROM gallery ORDER BY id DESC";
    
    # Solicito la consulta.
    $query  = $con->query($sql);
    
    # Devuelvo los datos
    return $query;
    
    # Cierro la conexión con la base de datos.
    $con->close();
  
  }
  
} 

?>