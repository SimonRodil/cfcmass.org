/* 

NUEVO ELEMENTO

*/

// logo's preview.
function readURL(input, id_preview_div) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $(id_preview_div).attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$('#form-new-element').submit(function(e){
  
  // Desactivo su función.
  e.preventDefault();
  
  $('#new-item button[type="submit"]').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
  
  // Busco los parametros del formulario.
  var formData = new FormData(this);
  var formAction = $('#form-new-element').attr('action');
  var formMethod = $('#form-new-element').attr('method');
    
    // Guardo los errores.
    $('#form-new-element .alert').slideUp();
    
    // Solicito la acción del formulario.
    $.ajax({
      
    // Acá ajusto los parametros del formulario.
    url: formAction,
    type: formMethod,
    dataType: "json",
    data: formData,
    cache: false,
    contentType: false,
    processData: false
            
    })
        
    // Para cuando ya se haya realizado:
    .done(function(data){
        
        if(data.status == 500) {

            // Bajo la alerta.
            $('#form-new-element .alert').slideDown();

            // Muestro el mensaje.
            $('#form-new-element .alert').html('<i class="fa fa-warning"></i> ' + data.message);

            // Vuelvo a activar el boton.
            $('#new-item button[type="submit"]').html('<i class="fa fa-check"></i> Aceptar').removeAttr('disabled');
            
            return;
        }
        
        // Muestro el mensaje de éxito.
        $('#form-new-element .alert').removeClass('alert-danger').addClass('alert-success').html('<i class="fa fa-check"></i> <b>Enhorabuena!</b> Accion realizada de manera exitosa.').slideDown();
        
        // Pongo la vista previa de la imagen.
        $('#elements-list').prepend('<div class="col-md-3"><div class="well"><img src="../images/gallery/' + data.src + '" class="img-thumbnail img-responsive" image="' + data.id + '"><hr><button type="button" class="btn btn-danger btn-block" data-id="' + data.id + '" data-action="delete"><i class="fa fa-trash-o"></i> Eliminar</button></div></div>');
                
        $('form').trigger('reset');
        
    });
    
});

$(document).on('click', '[data-action=delete]', function(){
   
    var $btn = $(this);
    
    // Desactivo todos los demas botones.
    $('[data-action=delete]').attr('disabled', true);
    $btn.html('<i class="fa fa-cog fa-spin"></i>');
    $id = $btn.attr('data-id');
    
    // Solicito eliminarla.
    $.get('../dri/panel/gallery/delete.php',{id:$id})
    .done(function(data){
        
        if(data == 'success') {
            $btn.parent().parent().slideUp().remove();
            alert('Eliminado Exitosamente');
        } else { alert(data); }
        
        $('[data-action=delete]').attr('disabled', false);
        
    });
    
});