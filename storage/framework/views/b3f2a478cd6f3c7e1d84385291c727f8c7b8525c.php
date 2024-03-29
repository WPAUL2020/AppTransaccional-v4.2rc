<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                <img src="<?php echo e(asset('Imagenes/empleadosexterno.png')); ?>">

                    <ol class="bc-3">
                            <li>
                                <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                            </li>
                            <li class="active">
                                <strong>Gestion Empleados Externos</strong>
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
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">TIPO DE DOCUMENTO</th>
                       <th class="text-center">NUMERO DOCUMENTO</th>
                       <th class="text-center">DIRECCION</th>
                       <th class="text-center">TELEFONO</th>
                       <th class="text-center">EXTENSION</th>
                       <th class="text-center">USUARIO</th>
                       <th class="text-center">EMPRESA</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>

                   <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr class="row100">
                       <td><?php echo e($users1->NOMBRE); ?></td>
                       <td><?php echo e($users1->ID_TIPO_IDENTIFICACION); ?></td>
                       <td><?php echo e($users1->NUM_DOCUMENTO); ?></td>
                       <td><?php echo e($users1->DIRECCION); ?></td>
                       <td><?php echo e($users1->TELEFONO); ?></td>
                       <td><?php echo e($users1->EXTENSION); ?></td>
                       <td><?php echo e($users1->CORREO); ?></td>
                       <td><?php echo e($empresa->NOMBRE); ?></td>

                       <td>
                           <a a href="GesUserTerEdit/updateUser/<?php echo e($users1->ID_EMPLEADO_TERCERO); ?>" class="btn btn-secondary">EDITAR</a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
                <a class="btn btn-primary" href="<?php echo e(URL::to('GesUserTerCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional-v4.2rc/resources/views/GesUserTerVista.blade.php ENDPATH**/ ?>