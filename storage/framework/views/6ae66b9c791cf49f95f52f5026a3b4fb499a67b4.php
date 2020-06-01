<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="Imagenes/crearproductos.png">

                                <ol class=" bc-3" >
                            <li>
                    <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro De Categoria</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
<body>
   <div class="container fondo_container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>REGISTRO DE PRODUCTOS</center></h2>
                 <div class="form-row">
            </div>
            </div>
        </div>
        <form method="POST" action="<?php echo e(URL::to('CategoriaCrear/guardar')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

        <div class="form-row">
            <div class="col">
                <label>Digitar Producto</label>
                    <input type="text" name="NOMBRE_PRODUCTO_SERV_T" class="form-control" placeholder="NOMBRE DEL PRODUCTO">
                <span class="text-danger"><?php echo e($errors->first("NOMBRE_PRODUCTO_SERV_T")); ?></span>
            </div>
         
            <div class="col">
                <label>Digitar Detalle del Producto</label>
                    <input type="text" name="DETALLE_PRODUCTO_SERV_T" class="form-control" placeholder="DETALLE DEL PRODUCTO">
                    <span class="text-danger"><?php echo e($errors->first("DETALLE_PRODUCTO_SERV_T")); ?></span>
            </div>
       
        
                <div class="col">
                    <label for="">Empresa:</label>
                        <select name="ID_EMPRESA_TERCERO" id="ID_EMPRESA_TERCERO" class="form-control be">
                            <?php $__currentLoopData = $empresa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($empresa->ID_EMPRESA_TERCERO); ?>"><?php echo e($empresa->NOMBRE); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    <span class="text-danger"><?php echo e($errors->first("ID_EMPRESA_TERCERO")); ?></span>
                
            </div>
        </div>
<br>
                    <div class="form-group ">
                        
                        <input type="submit" value="Registrar" class="btn btn-primary">
                       
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('Categorias')); ?>">Regresar</a>
                    </div>
            
        </form>
    </div>
       

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/CategoriaCrear.blade.php ENDPATH**/ ?>