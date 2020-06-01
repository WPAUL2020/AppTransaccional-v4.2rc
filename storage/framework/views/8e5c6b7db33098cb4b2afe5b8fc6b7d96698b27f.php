<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="<?php echo e(asset('Imagenes/crearcargo.png')); ?>">

                                <ol class=" bc-3" >
                            <li>
                    <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro De Cargos</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
    <div class="container fondo_container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>REGISTRO DE CARGOS</center></h2>
                <form method="POST" action="<?php echo e(URL::to('CargoCrear/guardar')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                <div class="col">
                <div class="form-group">
                    <label>Cargo a Registrar</label>
                    <input type="text" name="NOMBRE_CARGO" class="form-control" placeholder="Nombre del Cargo">
                    <span class="text-danger"><?php echo e($errors->first("NOMBRE_CARGO")); ?></span>
                     </div>
                    <div class="form-group">
                    <label>Dependencia del Cargo</label>
                        <select type="" name="DEPENDENCIA" class="form-control">
                                <option value="">--Escoja Tipo de Dependencia--</option>
                                <option>TIC</option>
                                <option>ADMINISTRACION</option>
                                <option>OPERACION</option>
                                <option>DIRECCION</option>
                       </select>
                       <span class="text-danger"><?php echo e($errors->first("DEPENDENCIA")); ?></span>
                    </div>
                    <div class="form-group">
                    <label>Descripciòn:</label>
                    <input type="text" name="DESCRIPCION" class="form-control" placeholder="Descripciòn">
                    <span class="text-danger"><?php echo e($errors->first("DESCRIPCION")); ?></span>
                     </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('Cargos')); ?>">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional-v4.2rc\resources\views/CargoCrear.blade.php ENDPATH**/ ?>