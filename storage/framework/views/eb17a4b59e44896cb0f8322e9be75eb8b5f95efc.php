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
                <h2> REGISTRO DE USUARIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL::to('GesUserTerCrear/guardar')); ?>"> <?php echo e(csrf_field()); ?>

  <div class="form-row">
    <div class="col">
    <label for="">Tipo de Identificaciòn:</label>
        <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
        <option value="">--Escoja Tipo de Identificacion--</option>
            <?php $__currentLoopData = $TipoIdents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TipoIdent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($TipoIdent->NOMBRE_TIPO_INDENTIFICACION); ?>"><?php echo e($TipoIdent->NOMBRE_TIPO_INDENTIFICACION); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col">
    <label>Numero de Documento:</label>
    <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Documento">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Nombre Completo:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    </div>
    <div class="col">
    <label>Direcciòn de Residencia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono:</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    </div>
    <div class="col">
    <label>Pais:</label>
    <input type="text" name="PAIS" class="form-control" placeholder="Pais" value="COLOMBIA">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono Oficina:</label>
    <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina">
    </div>
    <div class="col">
    <label>Extenciòn:</label>
    <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Usuario de Registro:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario de registro Correo">
    </div>
    <div class="col">
    <label for="inputEmail4">Password:</label>
    <input type="password" name="CONTRASENA" class="form-control" placeholder="Escribir Password">
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
    <div class="col">
    <label for="">Empresa:</label>
        <select name="ID_EMPRESA_TERCERO" id="ID_EMPRESA_TERCERO" class="form-control">
        <option value="">--Escoja la Empresa--</option>
            <?php $__currentLoopData = $EmpresaTerceros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EmpresaTercero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($EmpresaTercero->ID_EMPRESA_TERCERO); ?>"><?php echo e($EmpresaTercero->NOMBRE); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
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

  <div class="form-group">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
  </div>

  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('UsuariosTercero')); ?>">Regresar</a>
                    </div>
  </div>

</form>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/GesUserTerCrear.blade.php ENDPATH**/ ?>