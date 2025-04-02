// Inicio de Sesión.
    $('#sign-in-form').submit(function(e){
      
      // Activo el AJAX del formulario.
      e.preventDefault();
      
      // Chequeo que no estén los campos vacios.
      if($('#sign-in-form #username').val() != '' && $('#sign-in-form #password').val() != '') {
        
        // Guardo los errores.
        $('#sign-in-form .alert').slideUp();
        
        // Desactivo el boton.
        $('#sign-in-form button[type="submit"]').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
        
        // Declaro las variables del formulario.
        var method = $('#sign-in-form').attr('method');
        var formdata = new FormData(this);
        var url = $('#sign-in-form').attr('action');
        
        // Solicito la acción del formulario.
        $.ajax({
      
            // Acá ajusto los parametros del formulario.
            url: url,
            type: method,
            dataType: "html",
            data: formdata,
            cache: false,
            contentType: false,
            processData: false
                
          })
          
          // Para cuando ya se haya realizado:
          .done(function(data){
            
            if(data == 'success') {
              
              // Chequeo si está la opción de "Mantener sesión iniciada está abierta.
              if(document.getElementById('remember').checked == true) {
                
                // Creo la cookie en caso tal de que no esté.
                /* expires = new Date();
                expires.setTime(expires.getTime() + 31536000000);
                document.cookie = 'sert_session=' + $('#sign-in-form #username').val() + ';expires=' + expires.toUTCString(); */
                
              }
              
              // Me dirijo a la página inicial.
              location.assign('index.php');
              
            } else {
              
              // Bajo la alerta.
              $('#sign-in-form .alert').slideDown();
              
              // Depende a los datos es lo que va a ser declarado.
              var message_error;
              
              if(data == 'error-empty') { message_error = 'Los campos están vacios.'; } else
              if(data == 'error-rows-0') { message_error = 'No se ha encontrado un registro con estos parametros.'; } else
              if(data == 'error-password') { message_error = 'La contraseña es incorrecta.'; }
              else { message_error = data; }
              
              // Muestro el mensaje.
              $('#sign-in-form .alert').html('<i class="fa fa-warning"></i> <b>Error!</b> ' + message_error);
              
              // Vuelvo a activar el boton.
              $('#sign-in-form button[type="submit"]').html('Iniciar Sesión').removeAttr('disabled');
              
            }
            
          });
      
      // Muestro el error.  
      } else { $('#sign-in-form .alert').html('<i class="fa fa-warning"></i> <b>Rellena todos los campos!</b> Antes de continuar.').slideDown(); }
      
    });