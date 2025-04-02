<?php 

# Incluyo los archivos necesarios.
include "../../../mod/config.php";
include "../../../mod/services.php";
$con_services = new Services();

# Dependiendo al caso efectuo.
if($_GET['action'] == 'update') {
  
  # Chequeo que no esté vacio.
  if((isset($_POST['data']) && !empty($_POST['data'])) && (isset($_GET['shortcut']) && !empty($_GET['shortcut']))) {
    
    # Chequeo que los datos no sean iguales a los de la casa de PAZ
    $check_service = $con_services->SelService($_GET['shortcut'])->fetch_array();
    
    # Condicion si los datos son diferentes.
    if($check_service['data'] != $_POST['data']) {
      
      # Guardo los datos.
      $update = $con_service->UpdService($_GET['shortcut'], $_POST['content']);
      
      # Chequeo que los cambios sean exitosos.
      if($update == TRUE) {
        
        die('success');
        LogReport('El servicio ' . $_GET['shortcut'] . ' ha cambiado de contenido de (<b>' . $check_service['data'] . '</b>) a (<b>' . $_POST['data'] . '</b>)');
        
      } else { die($update); }
      
    } else { die('success'); }
    
  } else { die('error-settings'); }
  
} elseif ($_GET['action'] == 'change_estatus') {
  
  # Chequeo que los parametros necesarios están correctos.
  if((isset($_GET['estatus']) && !empty($_GET['estatus'])) && (isset($_GET['shortcut']) && !empty($_GET['shortcut']))) {
    
    # Chequeo que si exista el servicio.
    if($con_services->SelService($_GET['shortcut'])->num_rows > 0) {
      
      # Busco los datos del servicio.
      $service = $con_services->(SelService($_GET['shortcut']))->fetch_array();
      
      # Ahora chequeo que el estatus sea el mismo.
      if($_GET['estatus'] != $service['estatus']) {
        
        # Actualizo el estatus.
        $update = $con_service->UpdEstatus($_GET['shortcut'], $_GET['estatus']);
        
        # Chequeo que haya sido correcto.
        if($update == TRUE) {
          
          # Muestro el mensaje de exito, y guardo su registro.
          die ('success');
          LogReport('Se ha cambiado el estatus de estatus a ' . $_GET['estatus'] . ' de el servicio ' . $_GET['shortcut']);
          
        } else { die($update); }
        
      } else { die('true-success'); }
      
    } else { die('service-dont-exist'); }
  
  } else { die('error-settings'); }
  
}

?>