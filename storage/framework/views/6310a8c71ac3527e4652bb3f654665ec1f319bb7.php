<?php $__env->startSection('content'); ?>

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GestionUser')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">NOMBRE</th>
                       <th class="text-center">TIPO_DOCUMENTO</th>
                       <th class="text-center">NUM_DOCUMENTO</th>
                       <th class="text-center">DIRECCION</th>
                       <th class="text-center">TELEFONO</th>
                       <th class="text-center">PAIS</th>
                       <th class="text-center">CIUDAD</th>
                       <th class="text-center">CORREO</th>
                       <th class="text-center">TELEFONO_OFICINA</th>
                       <th class="text-center">EXTENSION</th>
                       <th class="text-center">USUARIO</th>
                       <th class="text-center">CONTRASENA</th>
                       <th class="text-center">OBSERVACION</th>
                   </tr>
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->NOMBRE); ?></td>
                       <td><?php echo e($users1->TIPO_DOCUMENTO); ?></td>
                       <td><?php echo e($users1->NUM_DOCUMENTO); ?></td>
                       <td><?php echo e($users1->DIRECCION); ?></td>
                       <td><?php echo e($users1->TELEFONO); ?></td>
                       <td><?php echo e($users1->PAIS); ?></td>
                       <td><?php echo e($users1->CIUDAD); ?></td>
                       <td><?php echo e($users1->CORREO); ?></td>
                       <td><?php echo e($users1->TELEFONO_OFICINA); ?></td>
                       <td><?php echo e($users1->EXTENSION); ?></td>
                       <td><?php echo e($users1->USUARIO); ?></td>
                       <td>
                           <a href="">VER</a>
                           <a href="">EDITAR</a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $users->render(); ?>

                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('GesUserTerCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/GestionUsuariosTercero/GesUserTerVista.blade.php ENDPATH**/ ?>