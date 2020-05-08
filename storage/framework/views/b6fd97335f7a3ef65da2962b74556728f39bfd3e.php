<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>FORMULARIO DE CONTACTO</center></h2>
                <p><center>Utilizando el siguiente formulario de contacto y nosotros nos pondremos en contacto con usted en el menor tiempo posible.</center></p>
                <form>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Escribir tu Nombre">
                    </div>
                    <div class="form-group">
                        <input type="phone" name="phone" class="form-control" placeholder="Telefono Celular">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Escribir tu E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Asunto" class="form-control" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" class="form-control" placeholder="Escribe tu Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar Formulario" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/williampaulrios/Desktop/ProyectoLaravel/BigDataII/resources/views/Contact.blade.php ENDPATH**/ ?>