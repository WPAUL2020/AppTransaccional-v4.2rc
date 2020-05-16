<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Registro de Usuarios</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro de Usuario</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
    <div class="container">
    <div class="row">
            <div class="col-md-5">
                <h2> REGISTRO DE USUARIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL::to('GestUserIntCrear/guardar')); ?>"> <?php echo e(csrf_field()); ?>

  <div class="form-row">
    <div class="col">
    <label for="">Tipo de Identificaciòn:</label>
        <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
        <option value="">--Escoja Tipo de Identificacion--</option>
            <?php $__currentLoopData = $TipoIdents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TipoIdent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($TipoIdent->NOMBRE_TIPO_INDENTIFICACION); ?>"><?php echo e($TipoIdent->	NOMBRE_TIPO_INDENTIFICACION); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <span class="text-danger"><?php echo e($errors->first("ID_TIPO_INDENTIFICACION")); ?></span>
    </div>
    <div class="col">
    <label>Numero de Documento:</label>
    <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Documento">
    <span class="text-danger"><?php echo e($errors->first("NUM_DOCUMENTO")); ?></span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Nombre Completo:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    <span class="text-danger"><?php echo e($errors->first("NOMBRE")); ?></span>
    </div>
    <div class="col">
    <label>Direcciòn de Residencia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    <span class="text-danger"><?php echo e($errors->first("DIRECCION")); ?></span>
    </div>
  </div>
  <div class="form-row">
    <div class="col">
    <label>Telefono:</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    <span class="text-danger"><?php echo e($errors->first("TELEFONO")); ?></span>
    </div>
    <div class="col">
    <label>Pais:</label>
    <input value="COLOMBIA" type="text" name="PAIS" class="form-control" placeholder="Pais">
    <span class="text-danger"><?php echo e($errors->first("PAIS")); ?></span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    <span class="text-danger"><?php echo e($errors->first("CIUDAD")); ?></span>
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    <span class="text-danger"><?php echo e($errors->first("CORREO")); ?></span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono Oficina:</label>
    <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina">
    <span class="text-danger"><?php echo e($errors->first("TELEFONO_OFICINA")); ?></span>
    </div>
    <div class="col">
    <label>Extenciòn:</label>
    <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn">
    <span class="text-danger"><?php echo e($errors->first("EXTENSION")); ?></span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Usuario de Registro:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario de registro Correo">
    <span class="text-danger"><?php echo e($errors->first("USUARIO")); ?></span>
    </div>
    <div class="col">
    <label for="inputEmail4">Password:</label>
    <input type="password" name="CONTRASENA" class="form-control" placeholder="Escribir Password">
    <span class="text-danger"><?php echo e($errors->first("CONTRASENA")); ?></span>
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
        <span class="text-danger"><?php echo e($errors->first("ID_CARGO")); ?></span>
    </div>
    <div class="col">
    <label for="">Rol del Funcionario:</label>
        <select name="ID_ROL" id="ID_ROL" class="form-control">
        <option value="">--Escoja Tipo de Rol--</option>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($rol->id); ?>"><?php echo e($rol->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <span class="text-danger"><?php echo e($errors->first("ID_ROL")); ?></span>
    </div>
    <div class="col">
    <label>Estado:</label>
    <select name="ESTADO"class="form-control">
    <option value="">--Escoja Estado--</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="DESACTIVADO">DESACTIVADO</option>
    </select>
    <span class="text-danger"><?php echo e($errors->first("ESTADO")); ?></span>
  </div>
  </div>

  <div class="form-group">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
    <span class="text-danger"><?php echo e($errors->first("OBSERVACION")); ?></span>
  </div>
  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('UsuariosInterno')); ?>">Regresar</a>
                    </div>

</form>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/GestUserIntCrear.blade.php ENDPATH**/ ?>