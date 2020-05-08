<?php $__env->startSection('content'); ?>

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID_SERVICIO</th>
                       <th class="text-center">ID_CATEGORIA</th>
                       <th class="text-center">NOMBRE_PRODUCTO</th>
                       <th class="text-center">PRECIO_UNITARIO</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   <?php $__currentLoopData = $Servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->ID_SERVICIO); ?></td>
                       <td><?php echo e($users1->ID_CATEGORIA); ?></td>
                       <td><?php echo e($users1->NOMBRE_PRODUCTO); ?></td>
                       <td><?php echo e($users1->PRECIO_UNITARIO); ?></td>
                       <td>
                           <a href="">VER</a>
                           <a href="">EDITAR</a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $Servicios->render(); ?>

                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('ServicioCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/ServicioVista.blade.php ENDPATH**/ ?>