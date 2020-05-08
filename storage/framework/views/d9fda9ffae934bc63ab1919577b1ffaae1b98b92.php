<?php $__env->startSection('content'); ?>

<title>Big Data E-Commerce</title>
<link href="<?php echo e(asset("bootstrap/css/bootstrap.css")); ?>" rel="stylesheet" />
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr>
                       <th class="text-center">ID</th>
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">E-MAIL</th>
                       <th class="text-center">PERFIL</th>
                       <th class="text-center">ROL</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                       <td><?php echo e($users1->id); ?></td>
                       <td><?php echo e($users1->name); ?></td>
                       <td><?php echo e($users1->email); ?></td>
                       <td><?php echo e($users1->rol); ?></td>
                       <td><?php echo e($users1->estado); ?></td>
                       <td>
                           <a href="EditarUsuarios/updateUser/<?php echo e($users1->id); ?>">EDITAR</a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $users->render(); ?>

                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('register')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/GestionUser.blade.php ENDPATH**/ ?>