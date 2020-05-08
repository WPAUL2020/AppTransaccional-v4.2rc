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
    <div class="row">
            <div class="">
                <h2> EDITAR EMPRESA: <?php echo e($clientes->NOMBRE); ?></h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL:: to("GestionClientes/changeEmpresa/$clientes->ID_EMPRESA_TERCERO")); ?>"> <?php echo e(csrf_field()); ?>

  <div class="form-row">
    <div class="col">
    <label>Dirección de la Compañia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn" value=<?php echo e($clientes->DIRECCION); ?>>
    </div>
    <div class="col">
    <label>Telefono de la Compañia</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono" value=<?php echo e($clientes->TELEFONO); ?>>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad"value=<?php echo e($clientes->CIUDAD); ?>>
    </div>
    <div class="col">
    <label>Sitio Web:</label>
    <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web" value=<?php echo e($clientes->WEBSITE); ?>>
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico" value=<?php echo e($clientes->CORREO); ?>>
    </div>
    <div class="col">
    <label>Estado:</label>
    <select name="ESTADO"class="form-control">
    <option value="">--Escoja Estado--</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="DESACTIVADO">DESACTIVADO</option>
    </select>
  </div>
  </div>
<br>
  <div class="form-row">
                    <div class="col">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Clientes')); ?>">Regresar</a>
  </div>
  </div>
</form>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional v3.2rc\resources\views/GestionClientesEdit.blade.php ENDPATH**/ ?>