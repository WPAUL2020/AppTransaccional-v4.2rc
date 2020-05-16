<?php $__env->startSection('content'); ?>
<div style="height: 30px;" class=""></div>
<div class="container page-body boxed-layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
                <center>
                <div class="card-header">
                    <a href="#">
                        <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="185" alt="" />
                    </a>
                </div>
                </center>
                <?php $__currentLoopData = $response; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $respuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for=""><?php echo e($respuesta->NOMBRE_PRODUCTO_SERV_T); ?></label>
                            <input name="<?php echo e($respuesta->NOMBRE_PRODUCTO_SERV_T); ?>" type="checkbox" class="form-control" id="<?php echo e($respuesta->NOMBRE_PRODUCTO_SERV_T); ?>">
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/instahunters.blade.php ENDPATH**/ ?>