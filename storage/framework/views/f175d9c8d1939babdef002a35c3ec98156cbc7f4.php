<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Editar Empresa</h1>

                    <ol class=" bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Editar Empresa</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
        <div class="container fondo_container">
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
                                 <label for="">Ciudad:</label>
                                    <select name="CIUDAD" id="ID_CIUDAD" class="form-control">
                                    <option value="">--Escoje la ciudad--</option>
                                    <?php $__currentLoopData = $Ciudad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($Ciudad->NOMBRE_CIUDAD); ?>"><?php echo e($Ciudad->NOMBRE_CIUDAD); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <span class="text-danger"><?php echo e($errors->first("CIUDAD")); ?></span>
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
                                <a class="btn btn-secondary" href="<?php echo e(URL::to('Clientes')); ?>">Regresar</a>
                            </div>
        </div>
        </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional-v4.2rc/resources/views/GestionClientesEdit.blade.php ENDPATH**/ ?>