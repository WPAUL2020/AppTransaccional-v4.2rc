<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestionar Usuarios</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestionar Usuarios</strong>
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
                           <a href="EditarUsuarios/updateUser/<?php echo e($users1->id); ?>" class="btn btn-secondary">EDITAR</a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $users->render(); ?>

                <a class="btn btn-primary" href="<?php echo e(URL::to('register')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransacional\AppTransaccional-v4.2rc\resources\views/GestionUser.blade.php ENDPATH**/ ?>