<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>GENERAR FACTURA</center></h2>
                <form method="POST" action="<?php echo e(URL::to('')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                <div class="form-row">
                    <div class="col">
                     <label for="">Tipo de Identificaciòn:</label>
                     <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
                    <option value="">--Escoja Tipo de Identificacion--</option>
                        <?php $__currentLoopData = $TipoIdents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TipoIdent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($TipoIdent->NOMBRE_TIPO_INDENTIFICACION); ?>"><?php echo e($TipoIdent->NOMBRE_TIPO_INDENTIFICACION); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                </div>
                <div class="form-group">
                    <label>Numero de Identificaciòn:</label>
                    <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Identificaciòn">
                     </div>
                <div class="form-group">
                        <input type="submit" value="Generar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional v3.2rc/resources/views/FacturaBuscar.blade.php ENDPATH**/ ?>