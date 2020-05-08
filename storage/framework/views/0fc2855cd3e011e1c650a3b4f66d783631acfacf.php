<?php $__env->startSection('content'); ?>

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">Regresar</a>
<br>
<BR>
<div class="container">
   <table class="table table-bordered table-hover text-center">
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">E-MAIL</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->id); ?></td>
                       <td><?php echo e($users1->name); ?></td>
                       <td><?php echo e($users1->email); ?></td>
                       <td><input type="checkbox"></td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">Editar</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">Eliminar</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/williampaulrios/Desktop/ProyectoLaravel/BigDataII/resources/views/GestionUser.blade.php ENDPATH**/ ?>