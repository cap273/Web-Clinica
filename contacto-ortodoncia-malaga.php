<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
	<title>Página Contacto | Dr. Patiño Clínica Dental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="description"
		content="Dr. Patiño Clínica Dental. Contacta a traves de nuestro formulario de contacto para alguna consulta o comentario. Ortodoncia en Málaga" />
	<meta property='og:locale' content='es_ES' />
	<meta property='og:type' content='website' />
	<meta property='og:title' content='Página Contacto | Dr. Patiño Clínica Dental' />
	<meta property='og:description'
		content='Dr. Patiño Clínica Dental. Contacta a traves de nuestro formulario de contacto para alguna consulta o comentario. Ortodoncia en Málaga' />
	<meta property='og:url' content='' />
	<meta property='og:site_name' content='Página Contacto | Dr. Patiño Clínica Dental' />
	<meta property="og:image" content="images/logo@2x.png" />

	<?php include('header.php'); ?>

	<!-- Slider
		============================================= -->
	<section id="page-title" class="page-title-parallax page-title-dark page-title-center skrollable skrollable-between"
		style="background: url('images/subheader-servicios.jpg') 0px -45.8863px / cover; padding: 60px 0px;"
		data-bottom-top="background-position:0px -200px;" data-top-bottom="background-position:0px 0px;">

		<div class="container clearfix" style="z-index: 2">
			<div class="emphasis-title dark nobottommargin">
				<h1 class="t700 ls0" style="color: #FFF;font-size: 60px;text-transform: none;">Contacto</h1>
			</div>

		</div>

		<div class="video-overlay" style="background: rgba(57,49,133,0.85); z-index: 1"></div>

	</section>

	<!-- Content
		============================================= -->
	<section id="content" style="margin-bottom: 0px;">

		<div class="content-wrap">

			<div class="container clearfix">

				<div class="row clearfix">

					<div class="col-lg-4">
						<div class="opening-table p-4" style="background-color: #f5f5f5">
							<div class="heading-block bottommargin-sm nobottomborder">
								<!-- <h4>Dr. Patiño Clínica Dental</h4> -->
								<p>Para hacer una consulta, introduzca sus datos en el formulario electrónico de
									contacto. Le responderemos a la mayor brevedad posible.</p>
								<p>Llámenos y solicite una cita sin cargo, donde le daremos su Diagnóstico Personalizado y Plan de Tratamiento. (No incluye Urgencias ni emisión de receta médica).
									</p>
							</div>
							<div class="time-table-wrap clearfix">
								<h4>Horarios</h4>
								<div class="row time-table">
									<h5 class="col-lg-5">Clínica Málaga</h5>
									<span class="col-lg-7">L a V 9:30h a 13:30h, 16:00h a 20:00h</span>
								</div>
								<div class="row time-table">
									<h5 class="col-lg-5">Clínica Linares</h5>
									<span class="col-lg-7">L a V 9:30h a 13:30h, 16:00h a 20:00h</span>
								</div>
							</div>
							<div class="time-table-wrap clearfix mt-2">
								<h4>Teléfonos</h4>
								<div class="row time-table">
									<h5 class="col-lg-5">Clínica Málaga</h5>
									<span class="col-lg-7"><a href="tel:+34952392944">952 39 29 44</a></span>
								</div>
								<div class="row time-table">
									<h5 class="col-lg-5">Clínica Linares</h5>
									<span class="col-lg-7"><a href="tel:+34953601981">953 60 19 81</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-8">

						<h3>¿Tienes alguna consulta o comentario?</h3>

						<div class="form-widget">

							<div class="form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
								<input type="hidden" name="recaptcha_response" id="recaptchaResponse">


								<div class="form-process"></div>

								<div class="col_half">
									<label for="template-contactform-name">Nombre <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-nombre"
										value="" class="sm-form-control required">
								</div>

								<div class="col_half col_last">
									<label for="template-contactform-email">Correo <small>*</small></label>
									<input type="email" id="template-contactform-email"
										name="template-contactform-email" value=""
										class="required email sm-form-control valid">
								</div>

								<div class="col_one_third">
									<label for="template-contactform-date">Fecha de nacimiento <small>*</small></label>
									<input type="date" id="template-contactform-date" name="template-contactform-nacimiento"
										value="" class="sm-form-control required">
								</div>

								<div class="col_one_third">
									<label for="template-contactform-cp">CP <small>*</small></label>
									<input type="number" id="template-contactform-cp" name="template-contactform-cp"
										value="" class="sm-form-control required">
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Teléfono</label>
									<input type="number" id="template-contactform-phone"
										name="template-contactform-telefono" value="" class="sm-form-control">
								</div>

								<div class="clear"></div>


								<!-- <div class="col_one_third col_last">
										<label for="template-contactform-service">Services</label>
										<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
											<option value="">-- Select One --</option>
											<option value="Wordpress">Wordpress</option>
											<option value="PHP / MySQL">PHP / MySQL</option>
											<option value="HTML5 / CSS3">HTML5 / CSS3</option>
											<option value="Graphic Design">Graphic Design</option>
										</select>
									</div> -->

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Consulta <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message"
										name="template-contactform-mensaje" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck"
										name="template-contactform-botcheck" value="" class="sm-form-control">
								</div>
								<div class="col_full" style="margin-bottom: 0px;">
                             <input type="checkbox" name="aceptada-politica-de-privacidad" id="aceptada-politica-de-privacidad" required="">   
                             <label style="" id="footer-check"><p style="margin-left: 2em;line-height: 35px;">He leído y acepto los Términos, Condiciones y la <a target="_blank" href="politica-de-privacidad.php">Política de Privacidad</a></p></label>
                        </div>
								<div class="col_full">
									<button class="button button-3d nomargin" type="submit"
										id="template-contactform-submit" name="template-contactform-submit"
										value="submit">Enviar Mensaje</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>
						</div>

					</div>


				</div>

			</div>

			<div class="clear"></div>

			<!-- <div class="row topmargin-lg footer-stick align-items-stretch">

					<div class="col-lg-4 dark col-padding ohidden" style="background-color: #564F97;">
						<div data-animate="fadeInLeft" class="not-animated">
							<a href="#"><h3 class="uppercase" style="font-weight: 600;">Health Insurance</h3></a>
							<p style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities.→</p>
						</div>
						<i class="icon-medical-i-cardiology bgicon"></i>
					</div>

					<div class="col-lg-4 dark col-padding ohidden" style="background-color: #34495e;">
						<div data-animate="fadeInLeft" data-delay="200" class="not-animated">
							<a href="#"><h3 class="uppercase" style="font-weight: 600;">Medical Records</h3></a>
							<p style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice.→</p>
						</div>
						<i class="icon-medical-i-administration bgicon"></i>
					</div>

					<div class="col-lg-4 dark col-padding ohidden" style="background-color: #DE6262;">
						<div data-animate="fadeInLeft" data-delay="400" class="not-animated">
							<a href="#"><h3 class="uppercase" style="font-weight: 600;">Online Bill Pay</h3></a>
							<p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities.→</p>
						</div>
						<i class="icon-medical-i-billing bgicon"></i>
					</div>

					<div class="clear"></div>

				</div> -->

		</div>

	</section><!-- #content end -->
	<div class="section py-5 mb-0">
		<div class="container">
			<div class="heading-block mb-0">

				<a style="text-align: justify;"><strong>INFORMACIÓN BASICA PROTECCIÓN DE DATOS</strong><br>
					<strong>Finalidades:</strong> Responder a sus solicitudes y remitirle información comercial de
					nuestros productos
					y servicios, incluso por correo electrónico. <strong>Legitimación:</strong> Consentimiento del
					interesado.
					<strong>Destinatarios:</strong> No están
					previstas cesiones de datos. <strong>Conservación:</strong> Una vez resuelta su solicitud por medio
					de nuestro
					formulario o contestada por correo electrónico, si no ha generado un nuevo tratamiento, y en caso de
					haber
					aceptado recibir envíos comerciales, hasta que solicite la baja de los
					mismos. <strong>Derechos:</strong> Puede
					retirar su consentimiento en cualquier
					momento, así como acceder, rectificar, suprimir sus datos y demás derechos en
					<a href="mailto:info@clinicacarlospatino.com">info@clinicacarlospatino.com</a>, puede ampliar
					Información Adicional en política de privacidad en
					<a href="index.php">www.clinicacarlospatino.com</a></span>
			</div>

		</div>
	</div>





	<?php include('footer.php'); ?>


	</body>

</html>