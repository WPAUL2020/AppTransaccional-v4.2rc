<?php $__env->startSection('content'); ?>

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">NOMBRE DEL ROL</th>
                       <th class="text-center">DESCRIPCION</th>
                       <th class="text-center">DEPENDENCIA</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->ID_ROL); ?></td>
                       <td><?php echo e($users1->NOMBRE_ROL); ?></td>
                       <td><?php echo e($users1->DESCRIPCION); ?></td>
                       <td><?php echo e($users1->DEPENDENCIA); ?></td>
                       <td>
                           <a href="">VER</a>
                           <a href="">EDITAR</a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $roles->render(); ?>

                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('RolCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/RolVista.blade.php ENDPATH**/ ?>