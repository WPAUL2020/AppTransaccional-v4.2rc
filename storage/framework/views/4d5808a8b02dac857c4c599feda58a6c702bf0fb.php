<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>


</head>

<body>

    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <br>
                <h2> <center>CONTACTENOS
                    <br>
                    <br>
                    <div class="col-md-6">
                        <img style="height: 80px;" src="<?php echo e(asset('Imagenes/logo.png')); ?>" alt="">
                    </div>
                    <br>
                </center></h2>
                <p><h5><center>Si deseas comunicarte con nosotros o que te devolvamos la llamada, por favor déjanos tus datos de contacto y alguien del semillero se comunicara contigo, gracias.</center></h5>
                </p>
                <br>
                <form method="POST" action="<?php echo e(URL::to('Mail/store')); ?>" >  <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Escribe tu Nombre">
                    </div>
                    <div class="form-group">
                        <input type="phone" name="phone" class="form-control" placeholder="Telefono Celular">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Escribe tu E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Asunto" class="form-control" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" class="form-control" placeholder="Escribe tu Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" name="" value="php">    Si, Me gustaria recibir periòdicamente Noticias </br>
                    </div>
                    <div class="form-group"><center>
                        <input type="submit" value="Enviar Formulario" class="btn btn-primary"></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional v3.2rc/resources/views/Contact.blade.php ENDPATH**/ ?>