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
      
      <style>
            .for-timeline {
              box-sizing: border-box;
            }
          
          .for-timeline .content {
              box-shadow: 0 0 12.5px #eaeaea;
          }

            /* The actual timeline (the vertical ruler) */
            .for-timeline .timeline {
              position: relative;
              margin: 0 auto;
            }

            /* The actual timeline (the vertical ruler) */
            .for-timeline .timeline::after {
              content: '';
              position: absolute;
              width: 6px;
              background-color: white;
              top: 0;
              bottom: 0;
              left: 50%;
              margin-left: -3px;
            }

            /* Container around content */
            .for-timeline .container {
              padding: 10px 40px;
              position: relative;
              background-color: inherit;
              width: 50%;
              margin: 0 !important;
            }

            /* The circles on the timeline */
            .for-timeline .container::after {
              content: '';
              position: absolute;
              width: 25px;
              height: 25px;
              right: -12px;
              background-color: white;
              border: 4px solid #1d367b;
              top: 15px;
              border-radius: 50%;
              z-index: 1;
            }

            /* Place the container to the left */
            .for-timeline .left {
              left: 0;
            }

            /* Place the container to the right */
            .for-timeline .right {
              left: 50%;
            }

            /* Add arrows to the left container (pointing right) */
            .for-timeline .left::before {
              content: " ";
              height: 0;
              position: absolute;
              top: 22px;
              width: 0;
              z-index: 1;
              right: 30px;
              border: medium solid white;
              border-width: 10px 0 10px 10px;
              border-color: transparent transparent transparent white;
            }

            /* Add arrows to the right container (pointing left) */
            .for-timeline .right::before {
              content: " ";
              height: 0;
              position: absolute;
              top: 22px;
              width: 0;
              z-index: 1;
              left: 30px;
              border: medium solid white;
              border-width: 10px 10px 10px 0;
              border-color: transparent white transparent transparent;
            }

            /* Fix the circle for containers on the right side */
            .for-timeline .right::after {
              left: -12px;
            }

            /* The actual content */
            .for-timeline .content {
              padding: 20px 30px;
              background-color: white;
              position: relative;
              border-radius: 6px;
            }

            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {
            /* Place the timelime to the left */
              .for-timeline .timeline::after {
                left: 31px;
              }

            /* Full-width containers */
              .for-timeline .container {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
              }

            /* Make sure that all arrows are pointing leftwards */
              .for-timeline .container::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
              }

            /* Make sure all circles are at the same spot */
              .for-timeline .left::after, .right::after {
                left: 15px;
              }

            /* Make all right containers behave like the left ones */
              .for-timeline .right {
                left: 0%;
              }
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_about.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Sobre Nosotros</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre Nosotros <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex hidden-sm show-md">
    				<div class="img d-flex align-self-stretch align-items-center justify-content-end" style="background-image:url(images/pastores-aboutus.jpg);">
    					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a> -->
    				</div>
    			</div>
                <div class="col-sm-12 show-sm hidden-md">
                    <img class="img-responsive" src="images/pastores-aboutus.jpg" style="max-width: 100%" alt="Pastores">
                </div>
    			<div class="col-md-6 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
                      <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Nuestros Pastores</span>
                        <p class="mb-4">El Pastor David Feliz Miller junto a su esposa Damarys Feliz y hijos sintieron en sus corazones la necesidad de implantar el reino de Dios en la Ciudad de Methuen Ma. Trabajando fuertemente con jovenes alcoholicos, adictos y trayendo fe y esperanza a ls mas necesitados. Hoy dios nos lleva a nuevos desafios contra vientos y mareas implantando el reino de Dios en el corazon de esta ciudad.</p>
                        <span class="subheading">Nuestra Iglesia</span>
                                    <p>Somos una iglesia multicultural y dinamica, enfocada en impactar nuestra communidad transformndo familias con el poder sobrenatural de Dios.</p>
                      </div>
                    </div>
	           </div>
    			<div class="col-md-7 col-sm-12 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
                      <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Nuestra Visión</span>
                        <p class="mb-4">Una visión divina no se cumple de un día para otro, sino que conlleva un proceso. Como apóstol de esta Casa, tengo la visión en mi corazón y se la transmito a todos los creyentes que conforman esta familia de Dios. El proceso de desarrollar la visión de Dios para esta Casa, lo llevamos adelante manifestando Su poder sobrenatural en cada etapa de la visión. Nada hay en esta visión que se pueda hacer de manera natural o con fuerza humana. Todo requiere la intervención del poder sobrenatural de Dios.</p>
                      </div>
                    </div>
	           </div>
    			<div class="col-md-5 col-sm-12 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
                      <div class="col-md-12 heading-section ftco-animate">
                        <p class="mb-4" style="border-left: 6px solid #eaeaea; padding-left: 20px">Y Jehová me respondió, y dijo:<br><br>
                            
                        <i>Escribe la visión, y declárala en tablas, para que corra el que leyere en ella. Aunque la visión tardará aún por un tiempo, mas se apresura hacia el fin, y no mentirá; aunque tardare, espéralo, porque sin duda vendrá, no tardará. — Habacuc 2:2-3</i></p>
                      </div>
                    </div>
	           </div>
            </div>
    	</div>
    </section>
      
    <section class="ftco-section bg-light for-timeline">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>La Visión en Acción</h2>
            </div>
        </div>
        <div class="timeline">
          <div class="container left">
            <div class="content">
              <h2>EVANGELIZAR</h2>
              <p>Es aquella etapa del proceso de la visión en la que ganamos almas para Cristo. TODO miembro de la iglesia debe ser un ganador de almas. Nuestro evangelismo es sobrenatural, pues no sólo predicamos la Palabra y testificamos, sino que también manifestamos pruebas del poder de Dios a través de milagros, sanidades, palabras proféticas y de ciencia.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>AFIRMAR</h2>
              <p>Es aquella etapa del proceso de la visión mediante la cual se cimenta, asegura, consolida la decisión del nuevo creyente (NC) y se le da el seguimiento apropiado hasta que desarrolle los fundamentos básicos de su nueva vida en Cristo, para que luego forme parte de un  grupo de discipulado.</p>
            </div>
          </div>
          <div class="container left">
            <div class="content">
              <h2>DISCIPULAR</h2>
              <p>El objetivo de discipular es  enseñar, entrenar, equipar, activar y pastorear ya que se busca el crecimiento constante y continuo de la persona.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>ENVIAR</h2>
              <p>Líderes son enviados dentro de la iglesia local, con el ADN de esa Casa y equipados con el poder y los dones necesarios para extender el Reino de Dios por medio de desarrollar cada una de las tareas que se le encargan. También, a medida que crecen espiritualmente, pueden ser promovidos y enviados como diácono, anciano o ministro, según el llamado que Dios tenga para su vida.</p>
            </div>
          </div>
        </div> 
    </section>
      
    <section class="ftco-section">
    	<div class="container">
        <div class="row no-gutters d-flex justify-content-center">
            <div class="col-md-12 text-center">
                <h2>Nuestro Credo</h2>
            </div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b no-border-l ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-null"></span>
        			</div>
        			<h3><a href="javascript:;">La trinidad de Dios</a></h3>
        			<p>Creemos en Dios Padre, Dios Hijo y Dios Espíritu Santo, y que los tres son uno. (1 Juan 5:7)<br><br><br></p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-bible"></span>
        			</div>
        			<h3><a href="javascript:;">La Biblia</a></h3>
        			<p>Creemos que la Biblia es la palabra de Dios inspirada, infalible e inmutable desde Génesis hasta Apocalipsis. (2 Timoteo 3:16)</p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-pray"></span>
        			</div>
        			<h3><a href="javascript:;">La Fe</a></h3>
        			<p>Creemos que sin fe es imposible vivir una vida agradable a Dios y que por ella se heredan las promesas. (Hebreos 11:6)</p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-number-5"></span>
        			</div>
        			<h3><a href="javascript:;">Los cinco ministerios</a></h3>
        			<p>Creemos en los cinco ministerios de Efesios 4.11, como los dones dados por Dios al cuerpo de Cristo. (Efesios 4:11)<br></p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b no-border-l ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-premium"></span>
        			</div>
        			<h3><a href="javascript:;">La Salvación</a></h3>
        			<p>Creemos que la salvación se obtiene por medio del arrepentimiento y la confesión de pecados; es dada por gracia divina (no por obras) y se recibe por la fe en Cristo Jesús. Pues, Él es el único mediador entre Dios y los hombres. (Hechos 4:12)<br><br></p>
        		</div>
        	</div>
        	<div class="col-md-6 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-drops"></span>
        			</div>
        			<h3><a href="javascript:;">El bautismo</a></h3>
        			<p>Creemos en el bautismo en el Cuerpo de Cristo, por el cual la persona acepta a Jesús, tiene un nuevo nacimiento y pasa a formar parte del cuerpo de Cristo y de su vida eterna.<br>

Creemos en el bautismo en aguas como símbolo de identificación con la muerte (al pecado) y con la resurrección de Jesús para vida eterna. (Romanos 6:4)<br>

Creemos en el bautismo del Espíritu Santo con la evidencia de hablar en otras lenguas, y que, a través de este bautismo, se recibe el poder para ser testigo de Jesús a todo el mundo. (Hechos 1:8, Hechos 2:4, Marcos 16:17)</p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-shine"></span>
        			</div>
        			<h3><a href="javascript:;">La santificación</a></h3>
        			<p>Creemos en la santificación como una obra hecha instantáneamente en el espíritu, pero que, también, debe ser desarrollada progresivamente en el alma y en el cuerpo de un hijo de Dios. (Hebreos 12:14, Romanos 6:19-22)<br><br></p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b no-border-l ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-museum"></span>
        			</div>
        			<h3><a href="javascript:;">Los ministerios gubernamentales</a></h3>
        			<p>Creemos que el apóstol y el profeta son ministerios gubernamentales que establecen el fundamento y la doctrina bíblica de la iglesia. (Efesios 3:5)<br><br></p>
        		</div>
        	</div>
        	<div class="col-md-6 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-endless"></span>
        			</div>
        			<h3><a href="javascript:;">La resurrección de los muertos<br> y la vida eterna</a></h3>
        			<p>Creemos en la segunda venida de Cristo por su pueblo, que los muertos en Cristo resucitarán primero y los que estén vivos, serán arrebatados por Jesús, y que todos pasarán por el juicio de Dios. Los que estén inscritos en el libro de la vida resucitarán para vida eterna y los que no, para condenación eterna. (1 Tesalonicenses 4:13-17, Apocalipsis 20:11-15)<br><br></p>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-volunteer"></span>
        			</div>
        			<h3><a href="javascript:;">La imposición de manos</a></h3>
        			<p>Creemos que es una de las maneras de transmitir bendición, sanidad y poder de Dios de un ser humano a otro. (Hechos 8:15-20, 1 Timoteo 4:14, 2 Timoteo 1:6)</p>
        		</div>
        	</div>
        	<div class="col-md-4 text-center">
        		<div class="practice-area border-b no-border-l ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-crown"></span>
        			</div>
        			<h3><a href="javascript:;">El reino de Dios</a></h3>
        			<p>Creemos en el reino de Dios como gobierno y en la persona de Jesús como Rey, como dos verdades absolutas y máximas. (Hechos 8:12)<br><br><br></p>
        		</div>
        	</div>
        	<div class="col-md-4 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-advertising"></span>
        			</div>
        			<h3><a href="javascript:;">Predicar el evangelio</a></h3>
        			<p>Creemos en expandir el evangelio del Reino de forma local, nacional y mundial, por todos los medios disponibles. (Mateo 24:14)<br><br><br></p>
        		</div>
        	</div>
        	<div class="col-md-4 text-center">
        		<div class="practice-area border-b ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-social-care"></span>
        			</div>
        			<h3><a href="javascript:;">El gobierno apostólico</a></h3>
        			<p>Creemos en establecer el gobierno apostólico en la iglesia local con un apóstol como cabeza, un profeta como parte del gobierno, los ministros y los ancianos. (Efesios 4:11, Hechos 14:23)</p>
        		</div>
        	</div>
        	<div class="col-md-6 text-center">
        		<div class="practice-area no-border-l ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-freedom"></span>
        			</div>
        			<h3><a href="javascript:;">El poder sanador y liberador del Reino</a></h3>
        			<p>Creemos en el poder del Reino para sanar a los enfermos, echar fuera demonios y hacer milagros, maravillas, señales y prodigios. (Mateo 12:28)</p>
        		</div>
        	</div>
        	<div class="col-md-6 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-cross"></span>
        			</div>
        			<h3><a href="javascript:;">La deidad de Jesucristo</a></h3>
        			<p>Creemos que Jesucristo es el Unigénito Hijo de Dios, nacido de una mujer virgen; que fue crucificado, murió y resucitó al tercer día; ascendió a los cielos y ahora está sentado a la diestra de Dios Padre. (Isaías 7:14, Lucas 1:30-35)</p>
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
  <script>
      $('.practice-area').parent().addClass('col-sm-12');
  </script>
  </body>
</html>