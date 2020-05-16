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
    <!-- Scripts -->
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js')); ?>"></script>


</head>
<body class="page-body">

    <div class="page-container" id="container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo@2x.png" width="120" alt="" />
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
                        <a href="index.html">
                            <i class="entypo-gauge"></i>
                            <span class="title">Dashboard</span>
                        </a>
                        <ul>
                            <li>
                                <a href="index.html">
                                    <span class="title">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">
                                    <span class="title">Dashboard 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-3.html">
                                    <span class="title">Dashboard 3</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="skin-black.html">
                                    <span class="title">Skins</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="skin-black.html">
                                            <span class="title">Black Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-white.html">
                                            <span class="title">White Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-purple.html">
                                            <span class="title">Purple Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-cafe.html">
                                            <span class="title">Cafe Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-red.html">
                                            <span class="title">Red Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-green.html">
                                            <span class="title">Green Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-yellow.html">
                                            <span class="title">Yellow Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-blue.html">
                                            <span class="title">Blue Skin</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="skin-facebook.html">
                                            <span class="title">Facebook Skin</span>
                                            <span class="badge badge-secondary badge-roundless">New</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="highlights.html">
                                    <span class="title">What's New</span>
                                    <span class="badge badge-success badge-roundless">v2.0</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="layout-api.html">
                            <i class="entypo-layout"></i>
                            <span class="title">Layouts</span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-api.html">
                                    <span class="title">Layout API</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-collapsed-sidebar.html">
                                    <span class="title">Collapsed Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-fixed-sidebar.html">
                                    <span class="title">Fixed Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-chat-open.html">
                                    <span class="title">Chat Open</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-horizontal-menu-boxed.html">
                                    <span class="title">Horizontal Menu Boxed</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-horizontal-menu-fluid.html">
                                    <span class="title">Horizontal Menu Fluid</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-mixed-menus.html">
                                    <span class="title">Mixed Menus</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-right-sidebar.html">
                                    <span class="title">Right Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a href="layout-both-menus-right-sidebar.html">
                                    <span class="title">Both Menus (Right Sidebar)</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="layout-page-transition-fade.html">
                                    <span class="title">Page Enter Transitions</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="layout-page-transition-fade.html">
                                            <span class="title">Fade Scale</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layout-page-transition-left-in.html">
                                            <span class="title">Left In</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layout-page-transition-right-in.html">
                                            <span class="title">Right In</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layout-page-transition-fade-only.html">
                                            <span class="title">Fade Only</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="layout-boxed.html">
                                    <span class="title">Boxed Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html" target="_blank">
                            <i class="entypo-monitor"></i>
                            <span class="title">Frontend</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="ui-panels.html">
                            <i class="entypo-newspaper"></i>
                            <span class="title">UI Elements</span>
                        </a>
                        <ul>
                            <li>
                                <a href="ui-panels.html">
                                    <span class="title">Panels</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-tiles.html">
                                    <span class="title">Tiles</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-buttons.html">
                                    <span class="title">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-typography.html">
                                    <span class="title">Typography</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-tabs-accordions.html">
                                    <span class="title">Tabs &amp; Accordions</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-tooltips-popovers.html">
                                    <span class="title">Tooltips &amp; Popovers</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-navbars.html">
                                    <span class="title">Navbars</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-breadcrumbs.html">
                                    <span class="title">Breadcrumbs</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-badges-labels.html">
                                    <span class="title">Badges &amp; Labels</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-progress-bars.html">
                                    <span class="title">Progress Bars</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-modals.html">
                                    <span class="title">Modals</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-blockquotes.html">
                                    <span class="title">Blockquotes</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-alerts.html">
                                    <span class="title">Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-pagination.html">
                                    <span class="title">Pagination</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="mailbox.html">
                            <i class="entypo-mail"></i>
                            <span class="title">Mailbox</span>
                            <span class="badge badge-secondary">8</span>
                        </a>
                        <ul>
                            <li>
                                <a href="mailbox.html">
                                    <i class="entypo-inbox"></i>
                                    <span class="title">Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailbox-compose.html">
                                    <i class="entypo-pencil"></i>
                                    <span class="title">Compose Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailbox-message.html">
                                    <i class="entypo-attach"></i>
                                    <span class="title">View Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="forms-main.html">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a href="forms-main.html">
                                    <span class="title">Basic Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-advanced.html">
                                    <span class="title">Advanced Plugins</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-wizard.html">
                                    <span class="title">Form Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-validation.html">
                                    <span class="title">Data Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-masks.html">
                                    <span class="title">Input Masks</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-sliders.html">
                                    <span class="title">Sliders</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-file-upload.html">
                                    <span class="title">File Upload</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms-wysiwyg.html">
                                    <span class="title">Editors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="tables-main.html">
                            <i class="entypo-window"></i>
                            <span class="title">Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a href="tables-main.html">
                                    <span class="title">Basic Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">
                                    <span class="title">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opened active has-sub">
                        <a href="extra-icons.html">
                            <i class="entypo-bag"></i>
                            <span class="title">Extra</span>
                            <span class="badge badge-info badge-roundless">New Items</span>
                        </a>
                        <ul class="visible">
                            <li class="has-sub">
                                <a href="extra-icons.html">
                                    <span class="title">Icons</span>
                                    <span class="badge badge-success">3</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="extra-icons.html">
                                            <span class="title">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="extra-icons-entypo.html">
                                            <span class="title">Entypo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="extra-icons-glyphicons.html">
                                            <span class="title">Glyph Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="extra-portlets.html">
                                    <span class="title">Portlets</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="extra-google-maps.html">
                                    <span class="title">Maps</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="extra-google-maps.html">
                                            <span class="title">Google Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="extra-vector-maps.html">
                                            <span class="title">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="extra-chat-api.html">
                                    <span class="title">Chat API</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-calendar.html">
                                    <span class="title">Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-calendar-2.html">
                                    <span class="title">Calendar 2</span>
                                    <span class="badge badge-secondary badge-roundless">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-notes.html">
                                    <span class="title">Notes</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-lockscreen.html">
                                    <span class="title">Lockscreen</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-login.html">
                                    <span class="title">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-register.html">
                                    <span class="title">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-invoice.html">
                                    <span class="title">Invoice</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="extra-gallery.html">
                                    <span class="title">Gallery</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="extra-gallery.html">
                                            <span class="title">Albums</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="extra-gallery-single.html">
                                            <span class="title">Single Album</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="extra-members.html">
                                    <span class="title">Members</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-profile.html">
                                    <span class="title">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-404.html">
                                    <span class="title">404 Page</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="extra-blank-page.html">
                                    <span class="title">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-timeline.html">
                                    <span class="title">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-comments.html">
                                    <span class="title">Comments</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-timeline-centered.html">
                                    <span class="title">Timeline Centered</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-tocify.html">
                                    <span class="title">Tocify</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-notifications.html">
                                    <span class="title">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-new-post.html">
                                    <span class="title">New Post</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-settings.html">
                                    <span class="title">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-scrollbox.html">
                                    <span class="title">Scrollbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-image-crop.html">
                                    <span class="title">Image Crop</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-search.html">
                                    <span class="title">Search Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-language-selector.html">
                                    <span class="title">Language Selector</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-nestable.html">
                                    <span class="title">Nestable Lists</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-file-tree.html">
                                    <span class="title">File Tree</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-load-progress.html">
                                    <span class="title">Load Progress</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="entypo-chart-bar"></i>
                            <span class="title">Charts</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <i class="entypo-flow-tree"></i>
                            <span class="title">Menu Levels</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-line"></i>
                                    <span class="title">Menu Level 1.1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-line"></i>
                                    <span class="title">Menu Level 1.2</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="entypo-flow-line"></i>
                                    <span class="title">Menu Level 1.3</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-parallel"></i>
                                            <span class="title">Menu Level 2.1</span>
                                        </a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="#">
                                            <i class="entypo-flow-parallel"></i>
                                            <span class="title">Menu Level 2.2</span>
                                        </a>
                                        <ul>
                                            <li class="has-sub">
                                                <a href="#">
                                                    <i class="entypo-flow-cascade"></i>
                                                    <span class="title">Menu Level 3.1</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="entypo-flow-branch"></i>
                                                            <span class="title">Menu Level 4.1</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-flow-cascade"></i>
                                                    <span class="title">Menu Level 3.2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-parallel"></i>
                                            <span class="title">Menu Level 2.3</span>
                                        </a>
                                    </li>
                                </ul>
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

                                    <a href="<?php echo e(url('/')); ?>">
                                        <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="120" />
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
                                                            Logout <i class="entypo-logout"></i>
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

            <br />
-<!-- Footer Widgets -->
<section class="footer-widgets">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <a href="https://universitariadecolombia.edu.co">
                    <img src="<?php echo e(asset('blogFrontend/assets/images/logo1.png')); ?>" width="120"/>
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
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional-v4.2rc/resources/views/layouts/app.blade.php ENDPATH**/ ?>