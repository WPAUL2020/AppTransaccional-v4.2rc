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


    <!-- Scripts -->
    <script src="{{ asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js') }}" defer></script>
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
                                                Logout
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
@yield('content')
	<!-- Bottom scripts (common) -->
	<script src="{{ asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js') }}" defer></script>
	<script src="{{ asset('neonFrontEnd/assets/js/bootstrap.js') }}" defer></script>
	<script src="{{ asset('neonFrontEnd/assets/js/joinable.js') }}" defer></script>
    <script src="{{ asset('neonFrontEnd/assets/js/resizeable.js') }}" defer></script>
	<script src="{{ asset('neonFrontEnd/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}" defer></script>
    <script src="{{ asset('neonFrontEnd/assets/js/neon-api.js') }}" defer></script>
    <script src="{{ asset('neonFrontEnd/assets/js/neon-chat.js') }}" defer></script>
	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('neonFrontEnd/assets/js/neon-custom.js') }}" defer></script>
    <!-- Imported scripts on this page -->
    <script src="{{ asset('neonFrontEnd/assets/js/jquery.validate.min.js') }}" defer></script>
    <script src="{{ asset('neonFrontEnd/assets/js/jquery.inputmask.bundle.js') }}" defer></script>
    <script src="{{ asset('neonFrontEnd/assets/js/neon-chat.js') }}" defer></script>

	<!-- Demo Settings -->
	<script src="{{ asset('neonFrontEnd/assets/js/neon-demo.js') }}" defer></script>


	<!-- JavaScripts initializations and stuff -->
    <script src="{{ asset('neonFrontEnd/assets/js/neon-custom.js') }}" defer></script>
</body>
</html>
