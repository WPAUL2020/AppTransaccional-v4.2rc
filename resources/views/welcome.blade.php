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

	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon.css') }}">
    <link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon-forms.css') }}">


	<script src="{{ asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js') }}"></script>

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

                        <a href="{{ url('/') }}">
                            <img src="{{ asset('Imagenes/logo.png') }}" width="120" />
                        </a>

                    </section>

                    <nav class="site-nav">

                        <ul class="main-menu hidden-xs" id="main-menu">
                            <li class="active">
                                <a href="{{ url('/') }}">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span>Acerca de Big Data</span>
                                </a>
                            </li>
                            <li>
                                <a href="portfolio.html">
                                    <span>Portafolio</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('Contact')}}">
                                    <span>Contactenos</span>
                                </a>
                            </li>
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                    <a href="{{URL::to('appl')}}" class="btn btn-blue">
                                        <span class="btn btn-blue">Zona Transaccional</span>
                                    </a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-black">
                                            <span class="btn btn-black">Login</span>
                                        </a>
                                    @endauth
                            </li>
                            @endif
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
<section class="slider-container" style="background-image: url('{{ asset('neonFrontEnd/assets/images/slide-img-1-bg.png') }}');">

	<div class="container dos">

		<div class="row">

			<div class="col-md-12">

				<div class="slides">

					<!-- Slide 1 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>BIG DATA</small>
								Dashboard &amp; Front-end
							</h2>

							<p>
								Neon &ndash; is flat admin template for multi-purpose usage built<br /> with the latest version of Bootstrap &ndash; 3.
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="{{ asset('Imagenes/slide-img-1-2.png') }}" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slide 2 -->
					<div class="slide" data-bg="{{ asset('') }}">

						<div class="slide-image">

							<a href="#">
								<img src="{{ asset('Imagenes/slide-img-1-3.png') }}" class="img-responsive" />
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
								transformar los modelos de negocio.
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="{{ asset('Imagenes/slide-img-1.png') }}" class="img-responsive" />
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
						Settings
					</h3>

					<p>
						Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence son shy.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-gauge"></i>
						Dashboard
					</h3>

					<p>
						On am we offices expense thought. Its hence ten smile age means. Seven chief sight far point any. Of so high into easy.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-lifebuoy"></i>
						24/7 Support
					</h3>

					<p>
						Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new.
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
						<a href="#">Portfolio</a>
					</h3>

					<p>Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence s...</p>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="portfolio-single.html" class="image">
						<img src="{{ asset('imagenes/banner.gif') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>
					<div class="busqueda">
					<h4>
						

						<a href="portfolio-single.html" class="name">Neon</a>
					</h4>

					<div class="categories">
						<a href="portfolio-single.html">Web Design / Development</a>
					</div>
					</div>
				</div>

			</div>

			

			</div>

		</div>

	</div>

</section>
<!-- Call for Action Button -->
{{-- <div class="container">
	<div class="row vspace">
		<div class="col-md-12">

			<div class="callout-action">
				<h2>Get your copy of Neon now</h2>

				<div class="callout-button">
					<a href="index.html" class="btn btn-secondary">Purchase</a>
				</div>
			</div>

		</div>
	</div>
</div> --}}
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
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-1.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-2.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-3.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-4.png') }}" />
						</a>

					</div>

					<div class="item">

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-5.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-6.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-7.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('neonFrontEnd/assets/images/client-logo-1-8.png') }}" />
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
                        <img src="{{ asset('neonFrontEnd/assets/images/logo1.png') }}" width="120"/>
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
                            <a href="#">
                                <i class="entypo-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
	<script src="{{ asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/bootstrap.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/joinable.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/resizeable.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/neon-slider.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('neonFrontEnd/assets/js/neon-custom.js') }}"></script>

</body>
</html>
