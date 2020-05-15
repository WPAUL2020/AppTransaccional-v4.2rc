<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Crear Medios de Pago</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Crear Medios de Pago</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>REGISTRO METODO DE PAGO</center></h2>
                <form method="POST" action="<?php echo e(URL::to('MedioPagoCrear/guardar')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                <div class="form-group">
                <label>Digitar metodo de Pago</label>
                    <input type="text" name="METODO_PAGO" class="form-control" placeholder="NOMBRE METODO DE PAGO">
                    <span class="text-danger"><?php echo e($errors->first("METODO_PAGO")); ?></span>
                     </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('MedioPagos')); ?>">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/MedioPagoCrear.blade.php ENDPATH**/ ?>