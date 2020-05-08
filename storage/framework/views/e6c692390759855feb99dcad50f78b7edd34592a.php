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
            <div class="col-md-5">
                <h2> EDITAR USUARIO: <?php echo e($EmpleadosInterno->NOMBRE); ?></h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL:: to("GestUserIntVista/changeUser/$EmpleadosInterno->ID_EMPLEADO_INTERNO")); ?>"> <?php echo e(csrf_field()); ?>


  <div class="form-row">
    <div class="col">
    <label>Direcciòn de Residencia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn" value=<?php echo e($EmpleadosInterno->DIRECCION); ?>>
    </div>
    <div class="col">
    <label>Telefono:</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono" value=<?php echo e($EmpleadosInterno->TELEFONO); ?>>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad" value=<?php echo e($EmpleadosInterno->CIUDAD); ?>>
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico" value=<?php echo e($EmpleadosInterno->CORREO); ?>>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono Oficina:</label>
    <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina" value=<?php echo e($EmpleadosInterno->TELEFONO_OFICINA); ?>>
    </div>
    <div class="col">
    <label>Extenciòn:</label>
    <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn" value=<?php echo e($EmpleadosInterno->EXTENSION); ?>>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label for="">Cargo del Funcionario:</label>
        <select name="ID_CARGO" id="ID_CARGO" class="form-control">
        <option value="">--Escoja Tipo de Cargo--</option>
            <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cargo->NOMBRE_CARGO); ?>"><?php echo e($cargo->NOMBRE_CARGO); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col">
    <label for="">Rol del Funcionario:</label>
        <select name="ID_ROL" id="ID_ROL" class="form-control">
        <option value="">--Escoja Tipo de Rol--</option>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($rol->NOMBRE_ROL); ?>"><?php echo e($rol->NOMBRE_ROL); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
  </div>

  <div class="form-group">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
  </div>

  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('UsuariosInterno')); ?>">Regresar</a>
                    </div>

</form>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional v3.2rc/resources/views/GestUserIntEdit.blade.php ENDPATH**/ ?>