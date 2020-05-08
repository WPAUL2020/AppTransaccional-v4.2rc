<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> REGISTRO DE SERVICIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL::to('ServicioCrear/guardar')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

  <div class="form-row">
    <div class="col">
    <label for="">Categoria:</label>
        <select name="ID_CATEGORIA" id="ID_CATEGORIA" class="form-control">
        <option value="">--Escoja Tipo de Categoria--</option>
            <?php $__currentLoopData = $Categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($Categoria->ID_CATEGORIA); ?>"><?php echo e($Categoria->NOMBRE_CATEGORIA); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <span class="text-danger"><?php echo e($errors->first("ID_CATEGORIA")); ?></span>
    </div>
    <div class="col">
    <label>Nombre del Servicio:</label>
    <input type="text" name="NOMBRE_PRODUCTO" class="form-control" placeholder="Nombre Servicio">
    <span class="text-danger"><?php echo e($errors->first("NOMBRE_PRODUCTO")); ?></span>
    </div>
    <div class="col">
    <label>Precio Unitario:</label>
    <input type="text" name="PRECIO_UNITARIO" class="form-control" placeholder="Precio Unitario">
    <span class="text-danger"><?php echo e($errors->first("PRECIO_UNITARIO")); ?></span>
    </div>
  </div>
  <br>
<div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Servicios')); ?>">Regresar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional v3.2rc\resources\views/ServicioCrear.blade.php ENDPATH**/ ?>