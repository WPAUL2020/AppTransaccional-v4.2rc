<?php $__env->startSection('content'); ?>
   <!-- Breadcrumb -->
   <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <h1>Gestión Categoria</h1>

                <ol class="breadcrumb bc-3" >
                        <li>
                <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Categoria</strong>
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
                       <th class="text-center">CATEGORIAS</th>
                   </tr>
                   <?php $__currentLoopData = $Categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr><td><?php echo e($users1->ID_CATEGORIA); ?></td>
                       <td><?php echo e($users1->NOMBRE_CATEGORIA); ?></td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo $Categorias->render(); ?>

                <a class="btn btn-primary" href="<?php echo e(URL::to('CategoriaCrear/agregar')); ?>">Agregar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional-v4.2rc/resources/views/CategoriaVista.blade.php ENDPATH**/ ?>