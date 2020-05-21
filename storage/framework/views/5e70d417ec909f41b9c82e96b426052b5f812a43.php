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


    <title>BIG DATA | Login</title>

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
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/login.css')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js')); ?>"></script>


</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="login-reg-panel">
		<div class="login-info-box">
			<h2 style="color:#000000">¿Tienes una cuenta?</h2>
			<p style="color:#4e4e4e">Ingresar</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>

		<div class="register-info-box">
			<h2 style="color:#000000">Olvidaste tú constraseña?</h2>
			<p style="color:#4e4e4e">Clic aquí</p>
			<label id="label-login" for="log-login-show">Recuperar</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
        <form method="POST" action="<?php echo e(route('login')); ?>" id="form-login">
            <?php echo csrf_field(); ?>
            <div class="white-panel">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo e(url('/')); ?>">
                        <br>
                        <br>
                        <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="150" />
                    </a>
                </div>
                <div class="login-show">
                    <h2 style="color:white">INGRESAR</h2>
                    <input id="email" name="email" type="email" placeholder="Email"  class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required autocomplete="off">
                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required autocomplete="off">
                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <a href="<?php echo e(route('login')); ?>" onclick="event.preventDefault(); document.getElementById('form-login').submit();" type="button">
                        <center>Login</center>
                    </a>
                </div>
        </form>
        <form action="<?php echo e(route('password.update')); ?>" method="post" id="frm-reset-pass">
            <div class="register-show">
                <?php echo csrf_field(); ?>
                <h2 style="color:white">REINICIAR PASSWORD</h2>
                <input id="email" type="email" placeholder="Email" name="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required>
                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                <a href="<?php echo e(route('password.update')); ?>" onclick="event.preventDefault(); document.getElementById('frm-reset-pass').submit();" type="button">
                    <center>Enviar</center>
                </a>
            </div>
        </form>
            </div>

	</div>

    <!-- Bottom scripts (common) -->
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/joinable.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/resizeable.js')); ?>"></script>
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-api.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('neonFrontEnd/assets/js/login.js')); ?>"></script>


		<!-- JavaScripts initializations and stuff -->
		<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-custom.js')); ?>"></script>


		<!-- Demo Settings -->
        <script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-demo.js')); ?>"></script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\AppTransaccional-v4.2rc\resources\views/auth/login.blade.php ENDPATH**/ ?>