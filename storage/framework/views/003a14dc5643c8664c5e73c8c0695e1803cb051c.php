<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion de Servicios</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion de Servicios</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID SERVICIO</th>
                       <th class="text-center">CATEGORIA</th>
                       <th class="text-center">NOMBRE SERVICIO</th>
                       <th class="text-center">PRECIO UNITARIO</th>

                   </tr>
                   <?php $__currentLoopData = $Servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->ID_SERVICIO); ?></td>
                       <td><?php echo e($users1->NOMBRE_CATEGORIA); ?></td>
                       <td><?php echo e($users1->NOMBRE_PRODUCTO); ?></td>
                       <td><?php echo e($users1->PRECIO_UNITARIO); ?></td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $Servicios->render(); ?>

                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('ServicioCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransacional\AppTransaccional-v4.2rc\resources\views/ServicioVista.blade.php ENDPATH**/ ?>