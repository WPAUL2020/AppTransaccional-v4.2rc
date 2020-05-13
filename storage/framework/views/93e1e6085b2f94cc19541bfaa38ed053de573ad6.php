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
                <h2> <center>REGISTRO ROL USUARIO</center></h2>
                <form method="POST" action="<?php echo e(URL::to('RolCrear/guardar')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                <div class="form-group">
                <label>Rol a Registrar</label>
                    <input type="text" name="NOMBRE_ROL" class="form-control" placeholder="Nombre del Rol">
                    <span class="text-danger"><?php echo e($errors->first("NOMBRE_ROL")); ?></span>
                     </div>
                    <div class="form-group">
                    <label>Descripciòn:</label>
                    <select type="" name="DESCRIPCION" class="form-control">
                    <option value="">--Escoja Descripciòn del Cargo--</option>
                                <option>ADMINISTRADOR TECNOLOGIA</option>
                                <option>USUARIO INTERNO</option>
                                <option>ADMINISTRADOR CLIENTE</option>
                                <option>USUARIO CLIENTE</option>
                       </select>
                    <span class="text-danger"><?php echo e($errors->first("DESCRIPCION")); ?></span>
                     </div>
                     <div class="form-group">
                    <label>Dependencia del Cargo</label>
                        <select type="" name="DEPENDENCIA" class="form-control">
                        <option value="">--Escoja Dependencia del Cargo--</option>
                                <option>TIC</option>
                                <option>ADMINISTRACION</option>
                                <option>OPERACION</option>
                                <option>DIRECCION</option>
                       </select>
                       <span class="text-danger"><?php echo e($errors->first("DEPENDENCIA")); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Roles')); ?>">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional-v4.2rc/resources/views/RolCrear.blade.php ENDPATH**/ ?>