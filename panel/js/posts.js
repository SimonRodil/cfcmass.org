/* 

NUEVA PUBLICACIÓN

*/

$('#new-post').submit(function(e){
  
  // Desactivo su función.
  e.preventDefault();

        
    // Vuelvo a activar el boton.
    $('#new-post button[type="submit"]').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', true);
  
  // Busco los parametros del formulario.
  var formData = new FormData(this);
  var formAction = $('#new-post').attr('action');
  var formMethod = $('#new-post').attr('method');
  
  // Chequeo que no estén los campos vacios.
  if($('#new-post #title').val() != '' && $('#new-post #image').val() != '' && $('#new-post #image').val() != '') {
    
    // Guardo los errores.
    $('#new-post .alert').slideUp();
    
    // Solicito la acción del formulario.
    $.ajax({
      
    // Acá ajusto los parametros del formulario.
    url: formAction,
    type: formMethod,
    dataType: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false
            
    })
        
    // Para cuando ya se haya realizado:
    .done(function(data){

        // Vuelvo a activar el boton.
        $('#new-post button[type="submit"]').html('<i class="fa fa-check"></i> Aceptar').removeAttr('disabled');
          
      if(data == 'success') {
        
        // Muestro el mensaje de éxito.
        $('#new-post .alert').removeClass('alert-danger').addClass('alert-success').html('<i class="fa fa-check"></i> <b>Enhorabuena!</b> Accion realizada de manera exitosa.').slideDown();
        
        // Me redirijo a la portada principal.
        location.assign('posts.php');
        
      } else {

        // Bajo la alerta.
        $('#new-post .alert').slideDown();

        // Depende a los datos es lo que va a ser declarado.
        var message_error;

        if(data == 'error-empty') { message_error = 'Los campos están vacios.'; } else
        if(data == 'error-rows-0') { message_error = 'No se ha encontrado un registro con estos parametros.'; } else
        if(data == 'error-password') { message_error = 'La contraseña es incorrecta.'; }
        else { message_error = data; }

        // Muestro el mensaje.
        $('#new-post .alert').html('<i class="fa fa-warning"></i> ' + message_error);
      }
          
    });
    
  } else { 
  
    // Muestro el error del campo vacio.
    $('#new-post .alert').html('<i class="fa fa-warning"></i> <b>Error!</b> Todos los campos deben ser llenos para poder continuar.').slideDown();
  
  }
  
});

/* 

EDITAR PUBLICACIÓN

*/

$('#edit-post').submit(function(e){
  
  // Desactivo su función.
  e.preventDefault();
  
  // Busco los parametros del formulario.
  var formData = new FormData(this);
  var formAction = $('#edit-post').attr('action');
  var formMethod = $('#edit-post').attr('method');
  
  // Chequeo que no estén los campos vacios.
  if($('#edit-post #title').val() != '' && $('#edit-post #content').val() != '') {
    
    // Guardo los errores.
    $('#edit-post .alert').slideUp();
    
    // Solicito la acción del formulario.
    $.ajax({
      
    // Acá ajusto los parametros del formulario.
    url: formAction,
    type: formMethod,
    dataType: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false
            
    })
        
    // Para cuando ya se haya realizado:
    .done(function(data){
          
      if(data == 'success') {
        
        // Muestro el mensaje de éxito.
        $('#edit-post .alert').removeClass('alert-danger').addClass('alert-success').html('<i class="fa fa-check"></i> <b>Enhorabuena!</b> Accion realizada de manera exitosa.').slideDown();
        
        // Me redirijo a la portada principal.
        location.assign('posts.php');
        
      } else {

        // Bajo la alerta.
        $('#edit-post .alert').slideDown();

        // Depende a los datos es lo que va a ser declarado.
        var message_error;

        if(data == 'error-empty') { message_error = 'Los campos están vacios.'; } else
        if(data == 'error-rows-0') { message_error = 'No se ha encontrado un registro con estos parametros.'; } else
        if(data == 'error-password') { message_error = 'La contraseña es incorrecta.'; }
        else { message_error = data; }

        // Muestro el mensaje.
        $('#edit-post .alert').html('<i class="fa fa-warning"></i> ' + message_error);

        // Vuelvo a activar el boton.
        $('#edit-post button[type="submit"]').html('<i class="fa fa-check"></i> Aceptar').removeAttr('disabled');

      }
          
    });
    
  } else { 
  
    // Muestro el error del campo vacio.
    $('#edit-post .alert').html('<i class="fa fa-warning"></i> <b>Error!</b> Todos los campos deben ser llenos para poder continuar.').slideDown();
  
  }
  
});

/*

ELIMINAR PUBLICACIÓN

*/

$('[data-target="#delete-post"]').click(function(){
  
  // Busco la ID del post.
  var id_post = $(this).attr('data-id');
  
  // Cuando confirme eliminar el post.
  $('[data-action="delete-post"]').click(function(){
    
    // Desactivo los botones.
    $('#delete-post .btn').attr('disabled', 'disabled');
    $(this).html('<i class="fa fa-cog fa-spin"></i>');
    
    // Solicito que pase.
    $.get("../dri/panel/posts/delete.php", { id: id_post }, function(data){
      
      if(data == 'success') { 
      
        // muestro el mensaje
        $('#delete-post .alert').removeClass('alert-danger').addClass('alert-success').html('<i class="fa fa-check"></i> <b>Enhorabuena!</b> Se ha realizado satisfactoriamente.').slideDown();
        
        // vuelvo a la lista
        location.assign('posts.php');
        
        // cierro el modal
        $('#delete-post').modal('hide');
      
      } else {
        
        // muestro el mensaje
        $('#delete-post .alert').html('<i class="fa fa-warning"></i> <b>Error!</b> ' + data).slideDown();
        
        // vuelvo a activar los botones.
        $('#delete-post .btn').removeAttr('disabled');
        $('[data-action="delete-post"]').html('Sí');
        
      }
      
    });
  });
  
});