<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion de Servicios</h1>

                    <ol class=" bc-3" >
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
<div class="table100 ver2 m-b-110">
   <table class="table table-striped text-center" data-vertable="ver2">
                   <tr class="row100 head">
                       <th class="text-center">ID SERVICIO</th>
                       <th class="text-center">CATEGORIA</th>
                       <th class="text-center">NOMBRE SERVICIO</th>
                       <th class="text-center">PRECIO UNITARIO</th>

                   </tr>
                   <?php $__currentLoopData = $Servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr class="row100">
                       <td><?php echo e($users1->ID_SERVICIO); ?></td>
                       <td><?php echo e($users1->NOMBRE_CATEGORIA); ?></td>
                       <td><?php echo e($users1->NOMBRE_PRODUCTO); ?></td>
                       <td><?php echo e($users1->PRECIO_UNITARIO); ?></td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $Servicios->render(); ?>

                <a class="btn btn-primary" href="<?php echo e(URL::to('ServicioCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional-v4.2rc/resources/views/ServicioVista.blade.php ENDPATH**/ ?>