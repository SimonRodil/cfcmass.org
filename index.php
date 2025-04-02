<?php require ('mod/config.php'); ?>
<?php require ('mod/posts.php'); ?>
<?php $con_posts = new Posts(); ?>
<?php $query_posts = $con_posts->SelPosts(); ?>
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
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <style>
        .center-browsers {
            text-align: -webkit-center; 
            text-align: -moz-center; 
            position: relative;
        }
        .topper {
            display: none !important;
        }
    </style>
      
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
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
    <div class="hero-wrap js-fullheight" style="background-image: url('vide/poster.png');" data-stellar-background-ratio="0.5" id="index-top">
      <video class="hero-video" autoplay muted loop playsinline>
        <source src="http://cfcmass.org/vide/video-bg.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div id="video" style="max-height: 100%"></div>
      <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate text-center">
          	<h1 class="text-white header">Centro Familiar Cristiano</h1>
            <h4 class="subheading">Llamados a traer el Poder Sobrenatural de Dios a esta Comunidad</h4>
            <h4 class="mb-4 subheading">Somos un lugar donde usted y su familia pueden venir y experimentar a Dios, Su amor y Su poder.</h4>
          </div>
        </div>
      </div>
    </div>
		
		<section class="bg-light">
			<div class="container">
				<div class="row center-browsers">
					<div class="col-md-12">
						<div class="box_welcome row">
							<div class="col-md-4 col-sm-4 col-5 text-center image-box">
								<img src="images/new-here.jpg">
							</div>
							<div class="col-md-8 col-sm-8 col-7 text-box text-left">
								<h4>Soy Nuevo Aquí</h4>
								<p>Bienvenido a Centro Familiar Cristiano, si esta es su primera vez visitándonos, haga clic aquí para conocer más sobre nosotros.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
    <section class="ftco-section bg-light index-2nd-section" style="padding-top: 0">
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
<?php if($query_posts->num_rows) { ?>
    <section class="ftco-section bg-light">
      <div class="container" style="padding: 0 60px; margin: 0; max-width: 100%">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">¡Mira que hay de nuevo!</span>
            <h2>Información Especial</h2>
          </div>
        </div>
         <div id="carousel-example" class="slider">
             <?php foreach($query_posts as $post) { ?>
                <div class="slide-item ftco-animate" default-classes="col-md-4 d-flex">
                    <div class="blog-entry justify-content-end">
                        <a href="<?= $post['url'] ?>" class="block-20" style="background-image: url('images/posts/<?= $post['image'] ?>');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <h3 class="heading mt-2"><a href="<?= $post['url'] ?>"><?= $post['title'] ?></a></h3>
                            <p><?= $post['content'] ?></p>
                        </div>
                    </div>
                </div>
             <?php } ?>
          </div>
      </div>
    </section>
      <?php } ?>
		
    <section class="ftco-section bg-white" hidden>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Te invitamos a estar al dia</span>
            <h2>Noticias</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="article.php" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">15</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="article.php" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">12</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="article.php" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">10</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
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
	                <li><a href="tel:9782080350"><span class="icon icon-phone"></span><span class="text">(978) 208-0350</span></a></li>
	                <li><a href="mailto:info@cfcmass.org"><span class="icon icon-envelope"></span><span class="text">info@cfcmass.org</span></a></li>
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
  <script src="slick/slick.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery.vide.min.js"></script>
	<script>
		$(document).ready(function(){
      // Adjust video size on window resize
      function scaleVideo() {
          const video = $('.hero-video');
          const windowWidth = $(window).width();
          const windowHeight = $(window).height();
          
          if (windowWidth / windowHeight > 16 / 9) {
              video.css({
                  'height': '100%',
                  'width': 'auto'
              });
          } else {
              video.css({
                  'width': '100%',
                  'height': 'auto'
              });
          }
      }

      // Initial scale
      scaleVideo();

      // Scale video on window resize
      $(window).resize(function() {
          scaleVideo();
      });


			/* $('.hero-wrap').vide({
				mp4: 'vide/video-bg.mp4',
				webm: 'vide/video-bg.webm',
				poster: 'vide/poster.png'
			}, {
				volume: 1,
				playbackRate: 1,
				muted: true,
				loop: true,
				autoplay: true,
				position: '50% 50%', // Similar to the CSS `background-position` property.
				posterType: 'detect', // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
				resizing: true, // Auto-resizing, read: https://github.com/VodkaBears/Vide#resizing
				bgColor: 'transparent', // Allow custom background-color for Vide div,
				className: '' // Add custom CSS class to Vide div
			}); */
			
			$('#carousel-example').slick({
				dots: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				touchMove: false,
				infinite:false,
				responsive:[{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2
					}
				},{
					breakpoint: 720,
					settings: {
						slidesToShow: 1
					}
				}]
			});
			
		});
		
	</script>
  </body>
</html>