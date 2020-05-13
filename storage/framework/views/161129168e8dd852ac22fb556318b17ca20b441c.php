<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion de Sector Empresa</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion de Sector Empresa</strong>
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
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">SECTOR DE LA EMPRESA</th>
                       <th class="text-center">DESCRIPCION</th>
                   </tr>
                   <?php $__currentLoopData = $sector; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->ID_SECTOR_EMPRESA_TERCERO); ?></td>
                       <td><?php echo e($users1->NOMBRE_SECTOR_EMPRESA_TERCERO); ?></td>
                       <td><?php echo e($users1->DESCRIPCION); ?></td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $sector->render(); ?>

                <a class="btn btn-primary" href="<?php echo e(URL::to('SectEmprTerCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/SectEmprTercVista.blade.php ENDPATH**/ ?>