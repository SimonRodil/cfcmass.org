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
    <link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">[TITULO DE LA NOTICIA]</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>[TITULO DE LA NOTICIA] <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
              <img src="images/image_1.jpg" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">[TITULO DE LA NOTICIA]</h2>
						<div class="blog-content mb-5">[CONTENIDO DE LA NOTICIA]</div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>Articulos Recientes</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> January 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->


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
        <div class="row mb-5 ftco-animate">
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
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(978) 208-0350</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@cfcma.org</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Developed by <a href="https://simonrodil.org.ve" target="_blank">Simón Rodil</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#3861a6"/></svg></div>


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