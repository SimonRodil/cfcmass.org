$(document).ready( function() {        
  
  // y - year.
  $('y').html(new Date().getFullYear());

	// sidebar menu click
	$('.templatemo-sidebar-menu li.sub a').click(function(){
		if($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
	});  // sidebar menu click
  
  // menú
  $.get("_ajax/menu_cpanel.php", function(data){
    
    // Los datos encontrados los envio a ser parte del formulario.
    $('.templatemo-sidebar-menu').html(data);
  
    // check who's actine and who's not.
    var ModuleURL = (location.pathname).slice((location.pathname).lastIndexOf("/") + 1);
    $(".templatemo-sidebar-menu > li:has(a[href='" + ModuleURL + "'])").addClass("active");
    
    if(ModuleURL == '') { $(".templatemo-sidebar-menu > li:has(a[href='index.php'])").addClass("active"); }
  
  }); //$.get
  
  //logout
  $('[data-action="log-out"]').click(function(){
    
    // desactivo el boton.
    $('#sign-out .btn').attr('disabled', 'disabled');
    
    $(this).html('<i class="fa fa-cog fa-spin"></i>');
    
    // solicito la consulta.
    $.get("../dri/panel/log-out.php", function(data){
      
      if(data == 'success') { 
        
        // Eliminio la cookie de cerrar la sesión y lo devuelvo a el panel de iniciar sesión.
        document.cookie = "sert_session=''; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        location.assign('sign-in.php'); 
      
      } else { 
        $('#sign-out .alert').html("<i class='fa fa-warning'></i>" + data).slideDown(); 
        $('#sign-out .btn').removeAttr('disabled');
        $('[data-action="log-out"]').html('Sí');
      }
      
    });
    
  });
  
}); // document.ready
