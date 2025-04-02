<?php require ('mod/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?= $system['title'] ?> - <?= $system['slogan'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

		<meta name="theme-color" content="#2141aa">
		<link rel="icon" sizes="192x192" type="image/png" href="images/icon-192x192.png">
		<link rel="icon" sizes="228x228" type="image/png" href="images/icon-228x228.png">
		
		<meta name="mobile-web-app-capable" content="yes">
		
		<!-- For IE 11, Chrome, Firefox, Safari, Opera -->
		<link rel="icon" href="images/icon-16x16.png" sizes="16x16" type="image/png">
		<link rel="icon" href="images/icon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="images/icon-48x48.png" sizes="48x48" type="image/png">
		<link rel="icon" href="images/icon-62x62.png" sizes="62x62" type="image/png">
		
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QQVSXL');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QQVSXL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-5">
	      <a class="navbar-brand" href="index.php"><img id="logotipo" src="images/logo-v2.png" height="60"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menú
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Descubre
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								
								<a class="dropdown-item" href="about-us.php">Quienes Somos</a>
								<a class="dropdown-item" href="nuestra-cobertura.php">Nuestra Cobertura</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="https://cfcma.churchcenter.com/registrations/events">Nuestros Eventos</a>
								<a class="dropdown-item" href="articles.php" hidden>Noticias</a>
								<a class="dropdown-item" href="https://www.youtube.com/pastoresmiller">Nuestras Predicas</a>
							</div>
						</li> 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Yo quiero
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="https://cfcma.churchcenter.com/giving">Donar</a>
								<a class="dropdown-item" href="https://cfcma.churchcenter.com/groups/small-groups">Ir a Casa de Paz</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="location.php">Localizarlos</a>
								<a class="dropdown-item" href="https://cfcma.churchcenter.com/people/forms/24596">Solicitar Oración</a>
							</div>
						</li> 
	          <li class="nav-item live-btn"><a href="live.php" class="nav-link">En Vivo</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_about.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Localizanos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Localizanos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Información de Contacto</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-5">
            <p><span class="icon icon-map-marker"></span> <span>Dirección:</span> 5 Pleasant St Methuen, MA 01844</p>
          </div>
          <div class="col-md-4">
            <p><span class="icon icon-phone"></span> <span>Teléfono:</span> <a href="tel://9782080350">(978) 208-0350</a></p>
          </div>
          <div class="col-md-3">
            <p><span class="icon icon-envelope"></span> <span>Email:</span> <a href="mailto:info@cfcmass.org">info@cfcmass.org</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe acá tu mensaje..."></textarea>
              </div>
              <div class="form-group">
				<button type="submit" class="btn btn-primary py-3 px-5">Enviar Mensaje</button>
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          	<div id2="map" class="bg-white">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2930.8434217074396!2d-71.18913898470139!3d42.72820471976558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e307638d27d8ab%3A0x479d1c9c47e6bd61!2s5%20Pleasant%20St%2C%20Methuen%2C%20MA%2001844%2C%20EE.%20UU.!5e0!3m2!1ses!2sve!4v1575160488271!5m2!1ses!2sve" width="550" height="550" frameborder="0" style="border: 1px solid #eaeaea; box-shadow: 0 0 20px #eaeaea" allowfullscreen=""></iframe>
              </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-casadepaz ftco-section img" style="background-image: url(images/hop_bg.jpg); height: 100%">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
						<img src="images/cdp_img.png">
    				<h2 class="mb-4 text-white">Visite una Casa de Paz esta semana</h2>
						<p class="text-white">
							Una Casa de Paz (CPz) es una reunión semanal en diferentes hogares por toda la ciudad de Chicago. Allí usted podrá conocer gente de su vecindario y encontrar a Dios, escuchar un mensaje poderoso y orar con otros por diferentes necesidades.
						</p>
						<a href="https://cfcma.churchcenter.com/groups/small-groups" target="_blank" class="btn btn-primary py-3 px-4">Encuentre su CdPz</a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light index-2nd-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="planee-visita.php" class="block-20" style="background-image: url('images/thumb-youth.jpg');">
              </a>
              <div class="text p-4 float-right d-block" style="height: 100%">
                <h3 class="heading mt-2"><a href="planee-visita.php">Planee Su Visita</a></h3>
                <p>Obtenga direcciones, vea nuestros horarios de servicios, y descubra lo que puede esperar durante su visita.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="empiece-aqui.php" class="block-20" style="background-image: url('images/thumb-family.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <h3 class="heading mt-2"><a href="empiece-aqui.php">Empiece Aquí</a></h3>
                <p>Estamos muy contentos de que esté interesado(a) en hacerse parte de nuestra familia. Conozca más sobre los primeros pasos para involucrarse.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="crezca-aqui.php" class="block-20" style="background-image: url('images/thumb-girl.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <h3 class="heading mt-2"><a href="crezca-aqui.php">Crezca Aquí</a></h3>
                <p>Dios tiene un propósito para su vida. Conozca todas las maneras en que podemos ayudarle a descubrirlo, desarrollarlo y a caminar en él.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                    </a>
                </div>
            </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
      <div class="container py-4">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 ftco-animate d-flex align-items-center">
            <h2 class="mb-0" style="color:white; font-size: 28px;">Suscribete ahora:</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Ingresa un correo electrónico">
                <button type="submit" class="btn submit px-3">Suscribirme</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">NUESTRA IGLESIA</h2>
              <p>Somos una iglesia multicultural y dinamica, enfocada en impactar nuestra communidad transformndo familias con el poder sobrenatural de Dios.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="mailto:INFO@CFCMA.ORG"><span class="icon-envelope"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com/CFCMASS"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="http://instagram.com/CFCMA"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Navegación</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Inicio</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Eventos</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Noticias</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Predicas</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Predicas</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Localizanos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Localizanos</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">5 Pleasant St Methuen, MA 01844</span></li>
	                <li><span class="icon icon-clock-o"></span><span class="text">Domingo : 10:00 am</span></li>
	                <li><a href="tel:9782080350"><span class="icon icon-phone"></span><span class="text">(978) 208-0350</span></a></li>
	                <li><a href="mailto:info@cfcmass.org"><span class="icon icon-envelope"></span><span class="text">info@cfcmass.org</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Developed by <a href="https://simonrodil.org.ve" target="_blank">Simón Rodil</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#3861a6"/></svg></div>

<!-- This site is converting visitors into subscribers and customers with Rocketbots - https://rocketbots.io -->
<script src="https://app.rocketbots.io/facebook/chat/plugin/19112/215001181861746" async></script>
<!-- https://rocketbots.io/ -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>