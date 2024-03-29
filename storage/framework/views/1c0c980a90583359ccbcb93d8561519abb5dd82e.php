<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                <img src="<?php echo e(asset('Imagenes/crearsectorempresa.png')); ?>">

                    <ol class=" bc-3" >
                            <li>
                    <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Crear Sector de Empresa</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>
<body>
    <div class="container fondo_container">
        <div class="row">
            <div class="col-md-5">
                <h2  class="col">R<span>EGISTRO</span> S<span>ECTOR</span> E<span>MPRESA</span></h2>
                <div class="form-row">
            </div>
            </div>
        </div>
         <form method="POST" action="<?php echo e(URL::to('SectEmprTerCrear/guardar')); ?>"> <?php echo e(csrf_field()); ?>

        <div class="form-row">
            <div class="col-sm-9">
                <label>Digitar nombre del sector</label>
                    <input type="text" name="NOMBRE_SECTOR_EMPRESA_TERCERO" class="form-control" placeholder="Nombre del SECTOR">
                    <span class="text-danger"><?php echo e($errors->first("NOMBRE_SECTOR_EMPRESA_TERCERO")); ?></span>
             </div>
             <div class="col-sm-9">
                    <label>Descripciòn:</label>
                    <input type="text" name="DESCRIPCION" class="form-control" placeholder="Descripciòn">
                    <span class="text-danger"><?php echo e($errors->first("DESCRIPCION")); ?></span>
            </div>
        </div>
<br>
        <div class="row">
                <div class="form-group aaa">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('Sector')); ?>">Regresar</a>
                </div>
            </div>
    </form>
            
</div>
    
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/SectEmprTerCrear.blade.php ENDPATH**/ ?>