<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!---Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="InstHunters" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('neonFrontEnd/assets/images/favicon.ico')); ?>">


    <title>Big Data</title>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/bootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/font-icons/entypo/css/entypo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-core.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-theme.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-forms.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/formulario.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Scripts -->
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js')); ?>"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body class="page-body">
<div id="contenedor_carga">
    <div id="cargaaa">
    </div>
</div>
    <div class="page-container" id="container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="sidebar-menu">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo men">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="120" alt="" />
                        </a>
                    </div>

                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a id="menu-toggle" class="sidebar-collapse-icon" onclick="event.preventDefault(); document.getElementById('container').submit();"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>


                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>


                <ul id="main-menu" class="main-menu">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('appl')); ?>">
                            <i class="entypo-gauge"></i>
                            <span class="title">Zona Transaccional</span>
                        </a>

                    </li>
                    <?php if(Auth::user()->authorizeRoles1('ADMINISTRADOR') or Auth::user()->authorizeRoles1('SUPERVISOR EXTERNO')): ?>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('UsuariosTercero')); ?>">
                            <i class="entypo-users"></i>
                            <span class="title">Gestión de Empleado Externos</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('GesUserTerCrear/agregar')); ?>">
                                    <span class="title"><i class="entypo-plus-circled"></i> Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('UsuariosTercero')); ?>">
                                    <span class="title"><i class="entypo-cw"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if(Auth::user()->authorizeRoles1('ADMINISTRADOR')): ?>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('UsuariosInterno')); ?>">
                            <i class="entypo-user"></i>
                            <span class="title">Gestión de Empleado Internos</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('GestUserIntCrear/agregar')); ?>">
                                    <span class="title"><i class="entypo-plus-circled"></i> Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('UsuariosInterno')); ?>">
                                    <span class="title"><i class="entypo-cw"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('Clientes')); ?>">
                            <i class="entypo-cc-by"></i>
                            <span class="title">Gestión Clientes</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('Clientes/agregar')); ?>">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title"> Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('Clientes')); ?>">
                                    <span class="title"><i class="entypo-cw"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('Cargos')); ?>">
                            <i class="entypo-vcard"></i>
                            <span class="title">Gestion Cargos</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('CargoCrear/agregar')); ?>">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('Cargos')); ?>">
                                    <i class="entypo-cw"></i>
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('Sector')); ?>">
                            <i class="entypo-cog"></i>
                            <span class="title">Gestion Sector (Empresa)</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('SectEmprTerCrear/agregar')); ?>">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('Sector')); ?>">
                                    <i class="entypo-cw"></i>
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('instahunters')); ?>">
                            <i class="entypo-network"></i>
                            <span class="title">Gestión Big Data</span>
                        </a>

                    </li>
                    <?php if(Auth::user()->authorizeRoles1('ADMINISTRADOR')): ?>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('MedioPagos')); ?>">
                            <i class="entypo-credit-card"></i>
                            <span class="title">Medios de Pago</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('MedioPagoCrear/agregar')); ?>">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('MedioPagos')); ?>">
                                    <i class="entypo-cw"></i>
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('Categorias')); ?>">
                            <i class="entypo-bag"></i>
                            <span class="title">Productos</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('CategoriaCrear/agregar')); ?>">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('Categorias')); ?>">
                                    <i class="entypo-cw"></i>
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php if(Auth::user()->authorizeRoles1('ADMINISTRADOR')): ?>
                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('Servicios')); ?>">
                            <i class="entypo-tools"></i>
                            <span class="title">Servicios</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo e(URL::to('ServicioCrear/agregar')); ?>">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title">Agregar</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(URL::to('Servicios')); ?>">
                                    <i class="entypo-cw"></i>
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="<?php echo e(URL::to('generarFactura')); ?>">
                            <i class="entypo-newspaper"></i>
                            <span class="title">Generar Factura</span>
                        </a>

                    </li>
                    <?php endif; ?>
                </li>
                <li class="has-sub">
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="entypo-logout"></i>
                        <span class="title">Cerrar Sesion</span>
                    </a>

                </li>


            </div>

        </div>

        <div class="main-content">

            <div class="wrap">

                <!-- Logo and Navigation -->
                <div class="site-header-container container">

                    <div class="row">

                        <div class="col-md-12">

                            <header class="site-header">

                                <section class="site-logo">

                                    <a href="<?php echo e(url('/')); ?>">
                                        <img src="<?php echo e(asset('Imagenes/logo3.png')); ?>" width="120" />
                                    </a>

                                </section>

                                <nav class="site-nav">

                                    <ul class="main-menu hidden-xs" id="main-menu">
                                        <li>
                                            <a href="<?php echo e(url('/')); ?>">
                                                <span>Inicio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('Servicios')); ?>">
                                                <span>Sevicios</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('Contact')); ?>">
                                                <span>Contactenos</span>
                                            </a>
                                        </li>
                                            <?php if(Route::has('login')): ?>
                                                <?php if(auth()->guard()->check()): ?>
                                                <div class="btn-group left-dropdown">
                                                <button type="button" class="btn btn-black"><?php echo e(Auth::user()->name); ?></button>
                                                    <button type="button" class="btn btn-black dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-primary" role="menu">
                                                        <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                            Cerrar Sesion <i class="entypo-logout"></i>
                                                        </a>
                                                        <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                            <?php echo e(csrf_field()); ?>

                                                        </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <?php else: ?>
                                                <li>
                                                    <a href="<?php echo e(route('login')); ?>">
                                                        <span class="btn btn-black">Login</span>
                                                    </a>
                                                </li>
                                                <?php endif; ?>
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
            </div>

            <?php echo $__env->yieldContent('content'); ?>

        <br>

<!-- Footer Widgets -->
<section class="footer-widgets">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <a href="https://universitariadecolombia.edu.co">
                    <img src="<?php echo e(asset('blogFrontend/assets/images/logo1.png')); ?>" width="120"/>
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
                <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Institución Educativa Universitaria de Colombia. </a>

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


    <!-- Bottom scripts (common) -->
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/joinable.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/resizeable.js')); ?>"></script>
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-api.js')); ?>"></script>
    <?php echo $__env->yieldContent('Scripts'); ?>

    <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#container").toggleClass("sidebar-collapsed");
    });
  </script>


		<!-- JavaScripts initializations and stuff -->
		<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-custom.js')); ?>"></script>


		<!-- Demo Settings -->
        <script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-demo.js')); ?>"></script>

        <!--===============================================================================================-->
	    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="resources/js/main.js"></script>
        <!--loader -->
       <script src="<?php echo e(asset('neonFrontEnd/assets/js/loadd.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/layouts/app.blade.php ENDPATH**/ ?>