<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestión Clientes</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestión Clientes</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
<br>
<BR>
<div class="table100 ver2 m-b-110">
   <table class="table table-striped text-center" data-vertable="ver2">
                <thead>
                   <tr class="row100 head">
                       <th class="text-center">SECTOR</th>
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">DIRECCION</th>
                       <th class="text-center">TELEFONO</th>
                       <th class="text-center">PAIS</th>
                       <th class="text-center">CORREO</th>
                       <th class="text-center">WEBSITE</th>
                       <th class="text-center">NIT</th>
                       <th class="text-center">OBSERVACION</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                </thead>
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr class="row100">
                       <td><?php echo e($users1->ID_SECTOR_EMPRESA_TERCERO); ?></td>
                       <td><?php echo e($users1->NOMBRE); ?></td>
                       <td><?php echo e($users1->DIRECCION); ?></td>
                       <td><?php echo e($users1->TELEFONO); ?></td>
                       <td><?php echo e($users1->PAIS); ?></td>
                       <td><?php echo e($users1->CORREO); ?></td>
                       <td><?php echo e($users1->WEBSITE); ?></td>
                       <td><?php echo e($users1->NIT); ?></td>
                       <td><?php echo e($users1->OBSERVACION); ?></td>
                       <td>
                            <a href="GestionClientesEdit/updateEmpresa/<?php echo e($users1->ID_EMPRESA_TERCERO); ?>" class="btn btn-secondary">EDITAR</a>
                       </td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $users->render(); ?>

                <a class="btn btn-primary" href="<?php echo e(URL::to('Clientes/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional-v4.2rc\resources\views/GestionClientes.blade.php ENDPATH**/ ?>