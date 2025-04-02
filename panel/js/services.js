//get the service.
$('#ajax-get-service').ready(function(){
  
  // chequeo si lo debo mostrar o no
  if($('#s-service').attr('status') == 1) {
    $('#ajax-get-service').show();
  } else if($('#s-service').attr('status') == 0) {
    $('#ajax-get-service').hide();
  }
      
  // shortcut service.
  var shortcut = $('#s-service').attr('service');
      
  // ajax get the service content.
  $.get("services/" + shortcut + ".php", function(this_data){
    $('#ajax-get-service').html(this_data);
  });
  
});

// switch service status
$('#switch-button').click(function(){
  
  // take the service and switch its status.
  $.get('_ajax/services/switch-status.php', { service: $('#s-service').attr('service') }, function(data) {
    
    // now we check the estatus.
    
  });
  
});