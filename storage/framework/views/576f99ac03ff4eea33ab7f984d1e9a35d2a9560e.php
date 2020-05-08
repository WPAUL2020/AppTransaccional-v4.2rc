<?php $__env->startSection('content'); ?>

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MI PERFIL</a>

                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">MEDIO DE PAGO</th>
                   </tr>
                   <?php $__currentLoopData = $MedioPagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->ID_PAGO); ?></td>
                       <td><?php echo e($users1->METODO_PAGO); ?></td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $MedioPagos->render(); ?>

                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('MedioPagoCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional v3.2rc/resources/views/MedioPagoVista.blade.php ENDPATH**/ ?>