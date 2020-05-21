<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!---Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="InstHunters" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('neonFrontEnd/assets/images/favicon.ico') }}">


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
    <link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon.css') }}">
    <link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/neon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('neonFrontEnd/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
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
    <script src="{{ asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js') }}"></script>


</head>
<body class="page-body">

    <div class="page-container" id="container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('Imagenes/logo.png') }}" width="120" alt="" />
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
                        <a href="{{URL::to('appl')}}">
                            <i class="entypo-gauge"></i>
                            <span class="title">Zona Transaccional</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{URL::to('appl')}}">
                                    <span class="title">Zona Transaccional</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="has-sub">
                        <a href="{{URL::to('UsuariosTercero')}}">
                            <i class="entypo-user"></i>
                            <span class="title">Gestión Usuarios Externos</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{URL::to('UsuariosTercero')}}">
                                    <span class="title"><i class="entypo-user"></i> Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title"><i class="entypo-user"></i> Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title"> <i class="entypo-user"></i> Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title"><i class="entypo-user"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="{{URL::to('UsuariosInterno')}}">
                            <i class="entypo-user"></i>
                            <span class="title">Gestión Usuarios Internos</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{URL::to('UsuariosInterno')}}">
                                    <span class="title"><i class="entypo-user"></i> Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title"><i class="entypo-user"></i> Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title"><i class="entypo-user"></i> Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title"><i class="entypo-user"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-user"></i>
                            <span class="title">Gestión Clientes</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title"> Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title"> Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title"><i class="entypo-user"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-user"></i>
                            <span class="title">Gestión Roles</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title"><i class="entypo-user"></i> Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title"><i class="entypo-user"></i> Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title"><i class="entypo-user"></i> Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title"><i class="entypo-user"></i> Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-user"></i>
                            <span class="title">Gestion Cargos</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title"><i class="entypo-user"></i>Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title">Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title">Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Gestion Sector (Empresa)</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title">Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title">Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Gestión Big Data</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">InstaHunters</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Medios de Pago</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title">Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title">Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Productos</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title">Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title">Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Servicios</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Gestionar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title">Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title">Editar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title">Actualizar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Generar Factura</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Generar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </li>
                <li class="has-sub">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="entypo-logout"></i>
                        <span class="title">Logout</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                <span class="title">Logout  <i class="entypo-logout"></i></span>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>

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

                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('Imagenes/logo.png') }}" width="120" />
                                    </a>

                                </section>

                                <nav class="site-nav">

                                    <ul class="main-menu hidden-xs" id="main-menu">
                                        <li>
                                            <a href="{{ url('/') }}">
                                                <span>Inicio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('Servicios')}}">
                                                <span>Sevicios</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('Contact')}}">
                                                <span>Contactenos</span>
                                            </a>
                                        </li>
                                            @if (Route::has('login'))
                                                @auth
                                                <div class="btn-group left-dropdown">
                                                <button type="button" class="btn btn-black">{{Auth::user()->name}}</button>
                                                    <button type="button" class="btn btn-black dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-primary" role="menu">
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                            Logout <i class="entypo-logout"></i>
                                                        </a>
                                                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                @else
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        <span class="btn btn-black">Login</span>
                                                    </a>
                                                </li>
                                                @endauth
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
            </div>
            
            @yield('content')

        <br>
       
<!-- Footer Widgets -->
<section class="footer-widgets">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <a href="https://universitariadecolombia.edu.co">
                    <img src="{{ asset('blogFrontend/assets/images/logo1.png') }}" width="120"/>
                </a>

                <p>
                    Institución educativa <br />
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


    <!-- Bottom scripts (common) -->
	<script src="{{ asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/bootstrap.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/joinable.js') }}"></script>
	<script src="{{ asset('neonFrontEnd/assets/js/resizeable.js') }}"></script>
    <script src="{{ asset('neonFrontEnd/assets/js/neon-api.js') }}"></script>
    @yield('Scripts')

<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#container").toggleClass("sidebar-collapsed");
    });
  </script>


		<!-- JavaScripts initializations and stuff -->
		<script src="{{ asset('neonFrontEnd/assets/js/neon-custom.js') }}"></script>


		<!-- Demo Settings -->
        <script src="{{ asset('neonFrontEnd/assets/js/neon-demo.js') }}"></script>

        <!--===============================================================================================-->	
	    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="resources/js/main.js"></script>
</body>
</html>
