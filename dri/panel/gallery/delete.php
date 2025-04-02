<?php session_start();

# Chequeo que no haya iniciado sesión.
if(!isset($_SESSION['sert_cpanel']['id']) || empty($_SESSION['sert_cpanel']['id'])) { header ('Location: sign-in.php'); } else {
  
  include "../../../mod/config.php";
  include "../../../mod/gallery.php";
  
  # Establezco conexión con la base de datos.
  $con_gallery = new Gallery();
    
  # Chequeamos que el titulo no esté vacio.
  if(isset($_GET['id']) && !empty($_GET['id'])) {
    
      
      ## Busco la imagen.
      $query_item = $con_gallery->SelItem($_GET['id']);
      $item = $query_item->fetch_array();
      
      # Planifico la locación donde estará.
      $location = "../../../images/gallery/" . $item['image'];
      
      # Chequeo que si exista la locación a donde vá.
      if(file_exists($location)) { $delete_image = unlink($location); } else { $delete_image = TRUE; }
      
      # Chequeo que se haya subido la imagem
      if($delete_image == TRUE) {
        
        # Subo el registro a la base de datos.
        $delete_bd = $con_gallery->DelImage($item['id']);
        
        if($delete_bd == TRUE){ 
          
          # Muestro el mensaje de exito.
          echo "success";
          # Registro la acción realizada.
          # LogReport("El usuario " . $_SESSION['sert_cpanel']['username'] . " Ha eliminado el elemento: " . $item['id']);
          
        } else { echo "Error: " . $delete_bd; }
        
    
      } else { echo "error-empty"; }

    }
}

?>