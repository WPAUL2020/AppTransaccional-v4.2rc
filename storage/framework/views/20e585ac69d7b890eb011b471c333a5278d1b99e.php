<!DOCTYPE html>

<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>BIG DATA | Institución Universitaria de Colombia</title>

	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/bootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/font-icons/entypo/css/entypo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-core.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-theme.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-forms.css')); ?>">


	<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js')); ?>"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>

<div class="wrap">


	<!-- Logo and Navigation -->
    <div class="site-header-container container">

        <div class="row">

            <div class="col-md-12">

                <header class="site-header">

                    <section class="site-logo">

                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="120" />
                        </a>

                    </section>

                    <nav class="site-nav">

                        <ul class="main-menu hidden-xs" id="main-menu">
                            <li class="active">
                                <a href="<?php echo e(url('/')); ?>">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span>Que es WebScraping</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo e(URL::to('Contact')); ?>">
                                    <span>Contactenos</span>
                                </a>
                            </li>
                            <li>
                                <?php if(Route::has('login')): ?>
                                    <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(URL::to('appl')); ?>" class="btn btn-blue">
                                        <span class="btn btn-blue">Zona Transaccional</span>
                                    </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-black">
                                            <span class="btn btn-black">Iniciar Sesion</span>
                                        </a>
                                    <?php endif; ?>
                            </li>
                            <?php endif; ?>
                        </ul>


                        <div class="visible-xs">

                            <a href="#" class="menu-trigger">
                                <i class="entypo-menu"></i>
                            </a>

                        </div>
                    </nav>

                </header>

            </div>

        </div>

    </div>
	<!-- Main Slider -->
<section class="slider-container" style="background-image: url('<?php echo e(asset('neonFrontEnd/assets/images/slide-img-1-bg.png')); ?>');">

	<div class="container dos">

		<div class="row">

			<div class="col-md-12">

				<div class="slides">

					<!-- Slide 1 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>BigData</small>
								Web Scraping
							</h2>

							<p>
								Con el web scraping tienes la oportunidad de conocer mejor a tu competencia, saber si tienen ofertas concretas, si han subido sus precios o si lanzan nuevos productos
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="<?php echo e(asset('Imagenes/slide-img-1-2.png')); ?>" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slide 2 -->
					<div class="slide" data-bg="<?php echo e(asset('')); ?>">

						<div class="slide-image">

							<a href="#">
								<img src="<?php echo e(asset('Imagenes/slide-img-1-3.png')); ?>" class="img-responsive" />
							</a>
						</div>

						<div class="slide-content text-right">
							<h2>
								<small>Big Data</small>
								Control de sus Servicios
							</h2>

							<p>
								Sientase libre Administrando todos sus servicios, <br />
								su empresa,<br />
								sus clientes, sus empleados.
							</p>

						</div>

					</div>

					<!-- Slide 3 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>Big Data</small>
								Visualiza &amp; Analiza
							</h2>

							<p>
								Cambia la forma de manejar la información, organizada, intuitiva, <br />
								transformando los modelos de negocio.
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="<?php echo e(asset('Imagenes/slide-img-1.png')); ?>" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slider navigation -->
					<div class="slides-nextprev-nav">
						<a href="#" class="prev">
							<i class="entypo-left-open-mini"></i>
						</a>
						<a href="#" class="next">
							<i class="entypo-right-open-mini"></i>
						</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>
<!-- Features Blocks -->
<section class="features-blocks">

	<div class="container">

		<div class="row vspace"><!-- "vspace" class is added to distinct this row -->

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-cog"></i>
						Analisis
					</h3>

					<p>
						Decodificación de datos que permitan obtener hipótesis y conclusiones y así generen facilidad en la manipulación y acceso de la información.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-gauge"></i>
						Automatizacion
					</h3>

					<p>
						La forma más recomendable de fortalecer tu desempeño, es gestionar el proceso comercial a través de sistemas o soluciones inteligentes que te permitan automatizar las actividades en la extracción de información.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-lifebuoy"></i>
						Extraccion
					</h3>

					<p>
						Obtención de cualquier tipo de información contenida dentro de un lugar plagado de datos en el que la manipulación ordinaria de datos no se puede realizar de manera común.
					</p>
				</div>

			</div>

		</div>

		<!-- Separator -->
		<div class="row">
			<div class="col-md-12">
				<hr />
			</div>
		</div>

	</div>

</section>
<!-- Portfolio -->
<section class="portfolio-widget">

	<div class="container">

		<div class="row">

			<div class="col-sm-3">

				<div class="portfolio-info">
					<h3>
						<a href="#">Portafolio</a>
					</h3>

					<p>Además de analizar a tu competencia, el scrapeo te permite descubrir posibles nichos en el mercado, conocer las categorías que funcionan mejor en tu tienda online o escoger la imagen destacada que quieras mostrar.</p>
				</div>

			</div>

			<div class="col-sm-8">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="portfolio-single.html" class="image">
						<img src="<?php echo e(asset('imagenes/banner.gif')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>
					
				</div>

			</div>



			</div>

		</div>

	</div>

</section>
<!-- Call for Action Button -->

<!-- Testimonails -->
<section class="testimonials-container">

	<div class="container">

		<div class="col-md-12">

			<div class="testimonials carousel slide" data-interval="8000">

				<div class="carousel-inner">

					<div class="item active">

						<blockquote>
							<p>
								Vivamus imperdiet felis consectetur onec eget orci adipiscing nunc. <br />
								Pellentesque fermentum, ante ac interdum ullamcorper.
							</p>
							<small>
								<cite>Art Ramadani</cite> - co-founder at Laborator
							</small>
						</blockquote>

					</div>

					<div class="item">

						<blockquote>
							<p>
								Entered of cordial do on no hearted. Yet agreed whence and unable limits. <br />
								Use off him gay abilities concluded immediate allowance.
							</p>
							<small>
								<cite>Larry Page</cite> - co-founder at Google
							</small>
						</blockquote>

					</div>

					<div class="item">

						<blockquote>
							<p>
								Of regard warmth by unable sudden garden ladies. No kept hung am size spot no. <br />
								Likewise led and dissuade rejoiced welcomed husbands boy.
							</p>
							<small>
								<cite>Bill Gates</cite> - ceo at Microsoft
							</small>
						</blockquote>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>


<!-- Client Logos -->
<section class="clients-logos-container">

	<div class="container">

		<div class="row">

			<div class="client-logos carousel slide" data-ride="carousel" data-interval="5000">

				<div class="carousel-inner">

					<div class="item active">

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-1.png')); ?>" />
						</a>

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-2.png')); ?>" />
						</a>

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-3.png')); ?>" />
						</a>

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-4.png')); ?>" />
						</a>

					</div>

					<div class="item">

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-5.png')); ?>" />
						</a>

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-6.png')); ?>" />
						</a>

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-7.png')); ?>" />
						</a>

						<a href="#">
							<img src="<?php echo e(asset('neonFrontEnd/assets/images/client-logo-1-8.png')); ?>" />
						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>
    <!-- Footer Widgets -->
    <section class="footer-widgets">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">

                    <a href="https://universitariadecolombia.edu.co">
                        <img src="<?php echo e(asset('neonFrontEnd/assets/images/logo1.png')); ?>" width="120"/>
                    </a>

                    <p>
                        Institución Educativa <br />
                        Universitaria de Colombia.
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Sede Administrativa:</h5>
                    <p>
                        Carrera 7 No. 35-85 <br />
                        Bogotá, COL
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Contactenos</h5>

                    <p>
                        Teléfono: +57 (1) 288 – 0871 <br />
                        Teléfono: +57 (1) 232 – 4070 <br />
                        inscripciones@universitariadecolombia.edu.co
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Site Footer -->
    <footer class="site-footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    © 2020 Copyright:
                    <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Institución Universitaria de Colombia. </a>

                </div>

                <div class="col-sm-6">

                    <ul class="social-networks text-right">
                        <li>
                            <a href="https://www.instagram.com/singsistemas/">
                                <i class="entypo-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/WPAUL2020/AppTransaccional-v4.2rc">
                                <i class="entypo-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/groups/IUDCUniversitariaDeColombia">
                                <i class="entypo-facebook"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </footer>
</div>


	<!-- Bottom scripts (common) -->
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/joinable.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/resizeable.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-slider.js')); ?>"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-custom.js')); ?>"></script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/welcome.blade.php ENDPATH**/ ?>