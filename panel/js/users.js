
      // Cuando clickee ver a un atleta.
      $(".view").click(function(){
        // Abro la vista modal.
        $("#modal-view-user").modal("show");
        
        // Id del Usuario
        var id = $(this).attr("id");
        
        // Icono de Cargando.
        $(".modal-body").html('<p class="text-center h3"><i class="fa fa-spin fa-cog"></i></p>');
        
        // Busco los datos a cargar.
        $.get("_ajax/user/get-user.php", { id: id }, function(data){
          // Inserto lo obtenido en el modal.
          $("#modal-view-user .modal-body").html(data);          
        })
      });
      
      // Cuando clickee editar a un atleta.
      $(".edit").click(function(){
        // Abro la vista modal.
        $("#modal-edit-user").modal("show");
        
        // Id del Usuarios
        var id = $(this).attr("id");
        
        // Icono de Cargando.
        $(".modal-body").html('<p class="text-center h3"><i class="fa fa-spin fa-cog"></i></p>');
        
        // Busco los datos a cargar.
        $.get("_ajax/user/edit-user.php", { id: id }, function(data){
          // Inserto lo obtenido en el modal.
          $("#modal-edit-user .modal-body").html(data);          
          
          // Codigo JavaScript para el formulario y la edición de Usuario
          var PasswordSecure = true;
          var PasswordVal = '';

          // Muestro el panel de cambiar contraseña.
          $("#yes-change").click(function(){
            $(this).attr("selected", "selected");
            $("#no-thx").removeAttr("selected");
            $(".change-password").slideDown();
          });

          $("#no-thx").click(function(){
            $(".change-password").slideUp();
            $(this).attr("selected", "selected");
            $("#yes-change").removeAttr("selected");
            PasswordSecure = true;      
            PasswordVal = '';
          });

          function CheckPasswords() {
            if(($("#password_1").val() == $("#password_2").val()) && ($("#password_1").val() != '' && $("#password_2").val() != '')) { 
              PasswordSecure = true; 
              PasswordVal = $("#password_1").val(); 
            } else { 
              PasswordSecure = false; 
              PasswordVal = false; 
            }
          }

          // Actualizo los datos.
          $("#form-edit-user").submit(function(e){

            var valThisButton = $('#modal-edit-user button[type="submit"]').html();
            $('#modal-edit-user button[type="submit"]').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
            
            e.preventDefault();
            
            if($("#yes-change").attr("selected")) { CheckPasswords(); }

            // Guardo el estatus.
            $(".error").slideUp();

            if($("#email").val() != '' && $("#username").val() != '') {

              if(PasswordSecure == true){
              
                // Empiezo a transmitir la información.
                $.post("../dri/panel/users/update.php", {

                  id: id,
                  username: $("#username").val(),
                  password: PasswordVal,
                  email: $("#email").val()

                }, function(data, status){

                  //Chequeo que los datos se hayan enviado correctamente.
                  if(data == "success") { 
                    alert('Actualización Exitosa.'); 
                    location.assign(location.pathname);
                    $("#modal-edit-user").modal("hide"); 
                    $("#modal-edit-user .modal-body").html('<p class="text-center h3"><i class="fa fa-spin fa-cog"></i></p>'); 
                  }

                  // Chequeo por que no pasó.
                  else {
                    // alert(PasswordVal);
                    // En caso de que...
                    if(data == "error-empty"){
                      // Muestro el Error.
                      $(".alert").html("<b>Error!</b> Rellene todos los campos antes de proseguir.");
                    }
                    else if (data == "error-email-validate"){
                      // Muestro el Error.
                      $(".alert").html("<b>Error!</b> El email no es valido, intente con uno valido porfavor.");
                    }
                    else if(data == "error-user-email"){
                      // Muestro el Error.
                      $(".alert").html("<b>Error!</b> El usuario y/o email ya existe/n en el sistema.");
                    }
                    else {
                      // Muestro el Error.
                      $(".alert").html(data);
                    }
                    $(".error").slideDown("fast");
                    
                    $('#modal-edit-user button[type="submit"]').html(valThisButton).removeAttr('disabled');
                    
                  }

                });

              } else { 

              // Muestro el Error.
              $(".alert").html("<b>Error!</b> Las contraseñas no coinciden.");
              $(".error").slideDown("fast");

              }

            } else { 

              // Muestro el Error.
              $(".alert").html("<b>Error!</b> Rellene todos los campos antes de proseguir.");
              $(".error").slideDown("fast");

            }
          });
        });
      });
      
      // Eliminar al Usuario.      
      $(".delete").click(function(){
        // Abro la ventana modal.
        $("#modal-delete-user").modal("show");
        
        var ID = $(this).attr("id");
        
        // En caso de que presione click a Aceptar.
        $("button[data-action='delete-user']").click(function(){
          
          var valThisButton = $('#modal-delete-user [data-action="delete-user"]').html();
          $('#modal-delete-user [data-action="delete-user"]').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
            
          // Solicitio eliminar al usuario.
          $.get("../dri/panel/users/delete.php", { id: ID }, function(data){
            if(data == "success") { 
              alert('Eliminación Exitosa'); 
              location.assign(location.pathname);
              $("#modal-delete-user").modal("hide"); 
              $("#modal-delete-user .modal-body .alert").empty(); 
            } else { 
              $("#modal-delete-user .error").slideDown();                
              $("#modal-delete-user .error .alert").html(data);
              $('#modal-delete-user [data-action="delete-user"]').html(valThisButton).removeAttr('disabled');
            }
          });
          
        });
        
      });
      
      // Nuevo Usuario,
      $(".new").click(function(){
        // Abro la vista modal.
        $("#modal-new-user").modal("show");
        
          // Actualizo los datos.
          $("#modal-new-user .submit-form").click(function(){
              
              var $btn = $(this);
              var $btnText = $btn.html();
              
              $btn.html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', true);

            // Guardo el estatus.
            $(".error").slideUp();

            if($("#name").val() != '' && $("#lastname").val() != '' && $("#email").val() != '' && $("#username").val() != '') {

              if(($("#password_1").val() == $("#password_2").val()) && ($("#password_1").val() != '' && $("#password_2").val() != '')){
              
                // Empiezo a transmitir la información.
                $.post("../dri/panel/users/new.php", {
                  
                  username: $("#username").val(),
                  password: $("#password_1").val(),
                  email: $("#email").val(),
                  rank: $("#rank").val()

                }, function(data, status){
                    
                    $btn.html($btnText).attr('disabled',false)

                  //Chequeo que los datos se hayan enviado correctamente.
                  if(data == "success") { 
                    alert('Registro Exitoso.');                     
                    location.assign(location.pathname);
                    $("#modal-new-user").modal("hide"); 
                  }

                  // Chequeo por que no pasó.
                  else {
                    // alert(PasswordVal);
                    // En caso de que...
                    if(data == "error-empty"){
                      // Muestro el Error.
                      $(".alert").html("<b>Error!</b> Rellene todos los campos antes de proseguir.");
                    }
                    else if (data == "error-email-validate"){
                      // Muestro el Error.
                      $(".alert").html("<b>Error!</b> El email no es valido, intente con uno valido porfavor.");
                    }
                    else if(data == "error-user-email"){
                      // Muestro el Error.
                      $(".alert").html("<b>Error!</b> El usuario y/o email ya existe/n en el sistema.");
                    }
                    else {
                      // Muestro el Error.
                      $(".alert").html(data);
                    }
                    $(".error").slideDown("fast");
                  }

                });

              } else { 

                // Muestro el Error.
                $(".alert").html("<b>Error!</b> Las contraseñas no coinciden. " + $("#password_1").val() + " " + $("#password_2").val());
                $(".error").slideDown("fast");

              }

            } else { 

              // Muestro el Error.
              $(".alert").html("<b>Error!</b> Rellene todos los campos antes de proseguir.");
              $(".error").slideDown("fast");

            }
          });
        
      });