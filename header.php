<?php
$pag = explode('/', $_SERVER['REQUEST_URI']);
$pag = $pag[count($pag)-1];
?>
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700,800,900|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="shortcut icon" href="images/favicon.ico">

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">
	<style>
		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}
		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

	<script src="https://www.google.com/recaptcha/api.js?render=6Le0d9kZAAAAAJ52ry1VPkOOtEDt5ia-QnyK6Y0L"></script>

	<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6Le0d9kZAAAAAJ52ry1VPkOOtEDt5ia-QnyK6Y0L', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;

        });
    });
	</script>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<!-- Top Bar
        ============================================= -->
        <div id="top-bar">

            <div class="container clearfix">

                <div class="col_half nobottommargin">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul>
                            <li><a href="medidas-seguridad-covid19.php" style="color: #ffffff;">Medidas para garantizar su seguridad frente al Covid19   &nbsp;&nbsp;<i class="icon-chevron-right1"></i></a></li>
                        </ul>
                    </div>

                </div>

               
                <div class="col_half fright col_last nobottommargin">

                    <!-- Top Social
                    ============================================= -->
                    <div class="top-links">
                        <ul>
                            <li>Málaga <a href="tel:+34952392944" style="color: #ffffff;display: inline-block;"><i class="icon-phone icon-flip-horizontal"></i>952 39 29 44</a></li>
                            <li>Linares <a href="tel:+34953601981" style="color: #ffffff;display: inline-block;"><i class="icon-phone icon-flip-horizontal"></i>953 60 19 81</a></li>
                        </ul>
                    </div>
                    <div id="top-social">
                        
                        </ul>
                    </div><!-- #top-social end -->

                </div>

            </div>

        </div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="" data-dark-logo="images/logo-dark.png"><img src="images/logo@2x.png" alt="Ortodoncia Málaga"></a>
						<!-- <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>-->
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li class="<?php if (strpos($pag, 'index')!==false){ echo 'current';}?>" ><a href="index.php"><div>Inicio</div></a>
								
							</li>
							<li><a href="#"><div>Especialidades &nbsp;<i class="icon-chevron-down1"></i></div></a>
								<ul>
									<li class="<?php if (strpos($pag, 'ortodoncia-en-malaga')!==false){ echo 'current';}?>">
										<a href="ortodoncia-en-malaga.php">
											<div><i class=""></i>Ortodoncia</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'periodoncia-en-malaga')!==false){ echo 'current';}?>">
										<a href="periodoncia-en-malaga.php">
											<div><i class=""></i>Periodoncia</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'implantes-dentales-en-malaga')!==false){ echo 'current';}?>">
										<a href="implantes-dentales-en-malaga.php">
											<div><i class=""></i>Implantología</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'cirugia-oral-en-malaga')!==false){ echo 'current';}?>">
										<a href="cirugia-oral-en-malaga.php">
											<div><i class=""></i>Cirugía Oral</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'estetica-dental-en-malaga')!==false){ echo 'current';}?>">
										<a href="estetica-dental-en-malaga.php">
											<div><i class=""></i>Estética Dental</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'odontopediatria-en-malaga')!==false){ echo 'current';}?>">
										<a href="odontopediatria-en-malaga.php">
											<div><i class=""></i>Odontopediatría</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'diseno-de-sonrisas-en-malaga')!==false){ echo 'current';}?>">
										<a href="diseno-de-sonrisas-en-malaga.php">
											<div><i class=""></i>Diseño de sonrisas</div>
										</a>
									</li>
								</ul>
							</li>
							
							<li><a href="#"><div>La Clínica &nbsp;<i class="icon-chevron-down1"></i></div></a>
								<ul>
									<li class="<?php if (strpos($pag, 'clinicas-dentales-en-malaga')!==false){ echo 'current';}?>">
										<a href="clinicas-dentales-en-malaga.php">
											<div><i class=""></i>Quiénes somos</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'clinicas-de-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="clinicas-de-ortodoncia-malaga.php">
											<div><i class=""></i>Nuestras clínicas</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'instalaciones-de-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="instalaciones-de-ortodoncia-malaga.php">
											<div><i class=""></i>Instalaciones</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'casos-clinicos-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="casos-clinicos-ortodoncia-malaga.php">
											<div><i class=""></i>Casos clínicos</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="<?php if (strpos($pag, 'medidas-seguridad-covid19')!==false || strpos($pag, 'recomendaciones-ante-covid19')!==false){ echo 'current';}?>">
								<a href="#"><div>COVID19 &nbsp;<i class="icon-chevron-down1"></i></div></a>
								<ul>
									<li class="<?php if (strpos($pag, 'medidas-seguridad-covid19')!==false){ echo 'current';}?>">
										<a href="medidas-seguridad-covid19.php">
											<div><i class=""></i>Protocolo de Seguridad Covid19</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'recomendaciones-ante-covid19')!==false){ echo 'current';}?>">
										<a href="recomendaciones-ante-covid19.php">
											<div><i class=""></i>Recomendaciones ante el Covid19</div>
										</a>
									</li>
								</ul>
							</li>
							<li><a href="#"><div>Blog &nbsp;<i class="icon-chevron-down1"></i></div></a>
								<ul>
									<li class="<?php if (strpos($pag, 'noticias-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="noticias-ortodoncia-malaga.php">
											<div><i class=""></i>Noticias</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'prensa-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="prensa-ortodoncia-malaga.php">
											<div><i class=""></i>Prensa</div>
										</a>
									</li>
								
								</ul>
							</li>
							<li><a href="#"><div>Contacto &nbsp;<i class="icon-chevron-down1"></i></div></a>
								<ul>
									<li class="<?php if (strpos($pag, 'contacto-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="contacto-ortodoncia-malaga.php">
											<div><i class=""></i>Contacta con nosotros</div>
										</a>
									</li>
									<li class="<?php if (strpos($pag, 'trabaja-con-nosotros-ortodoncia-malaga')!==false){ echo 'current';}?>">
										<a href="trabaja-con-nosotros-ortodoncia-malaga.php">
											<div><i class=""></i>Trabaja con nosotros</div>
										</a>
									</li>
								
								</ul>
							</li>
						
						</ul>


					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->