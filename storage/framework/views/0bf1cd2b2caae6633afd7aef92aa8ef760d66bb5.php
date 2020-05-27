<?php $__env->startSection('content'); ?>
  <!-- Breadcrumb -->
  <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <h1>Gestión Big Data</h1>

                <ol class=" bc-3" >
                        <li>
                <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Big Data / Busquedas Realizadas</strong>
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
                       <th class="text-center">BUSQUEDA REALIZADA</th>
                       <th class="text-center">FECHA DE BUSQUEDA</th>
                       <th class="text-center">ACCION</th>
                   </tr>

                   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="row100">
                    <td><?php echo e($datos->wordSearch); ?></td>
                    <td><?php echo e($datos->consulta_log); ?></td>

                       <td>
                       <a a href="instahunters/Estadistica/<?php echo e($datos->_id); ?>" class="btn btn-secondary">VER ESTADISTICA</a>
                           <a a href="instahunterview/<?php echo e($datos->_id); ?>" class="btn btn-info">VISTA PREVIA <i class="fas fa-eye"></i></a>
                       </td>
                       </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/instahuntersvista.blade.php ENDPATH**/ ?>