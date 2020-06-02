<?php $__env->startSection('content'); ?>


    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="<?php echo e(asset('Imagenes/editarempleadosext.png')); ?>">

                    <ol class=" bc-3" >
                            <li>
                    <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Editar Usuarios Tercero</strong>
                        </li>
                        </ol>

                </div>
            </div>
        </div>
    </section>
    <div class="container fondo_container">
    <div class="row">
            <div class="col-md-5">
                <h2> EDITAR USUARIO <?php echo e($EmpleadosTercero->NOMBRE); ?></h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL:: to("GesUserTerVista/changeUser/$EmpleadosTercero->ID_EMPLEADO_TERCERO")); ?>"> <?php echo e(csrf_field()); ?>


  <div class="form-row">
    <div class="col">
    <label>Direcciòn de Residencia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn" value=<?php echo e($EmpleadosTercero->DIRECCION); ?>>
    <span class="text-danger"><?php echo e($errors->first("DIRECCION")); ?></span>
    </div>
    <div class="col">
    <label>Telefono:</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono"value=<?php echo e($EmpleadosTercero->TELEFONO); ?>>
    <span class="text-danger"><?php echo e($errors->first("TELEFONO")); ?></span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad" value=<?php echo e($EmpleadosTercero->CIUDAD); ?>>
    <span class="text-danger"><?php echo e($errors->first("CIUDAD")); ?></span>
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico"value=<?php echo e($EmpleadosTercero->CORREO); ?>>
    <span class="text-danger"><?php echo e($errors->first("CORREO")); ?></span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono Oficina:</label>
    <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina" value=<?php echo e($EmpleadosTercero->TELEFONO_OFICINA); ?>>
    <span class="text-danger"><?php echo e($errors->first("TELEFONO_OFICINA")); ?></span>
    </div>
    <div class="col">
    <label>Extenciòn:</label>
    <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn"value=<?php echo e($EmpleadosTercero->EXTENSION); ?>>
    <span class="text-danger"><?php echo e($errors->first("EXTENSION")); ?></span>
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
                <option value="<?php echo e($rol->NOMBRE_ROL); ?>"><?php echo e($rol->NOMBRE_ROL); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <span class="text-danger"><?php echo e($errors->first("ID_ROL")); ?></span>
    </div>
  </div>

  <div class="form-group">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
    <span class="text-danger"><?php echo e($errors->first("OBSERVACION")); ?></span>
  </div>

  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('UsuariosTercero')); ?>">Regresar</a>
                    </div>
</div>
</form>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional-v4.2rc\resources\views/GesUserTerEdit.blade.php ENDPATH**/ ?>