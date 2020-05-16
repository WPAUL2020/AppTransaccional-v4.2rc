<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Generar Factura</h1>

                                <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="<?php echo e(URL::to('appl')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Generar Factura</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
    <header style="height: 70px">
    </header>
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

        <div class="card-body">
            <form method="POST" action="<?php echo e(URL::to('Factura')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="Nit">Nit</label>
                        <input name="Nit" type="text" class="form-control" id="Nit" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit">
                        <?php if ($errors->has('Nit')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Nit'); ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="Metodo de pago">Metodo de pago</label>
                        <select class="form-control" name="mPago" id="mPago" data-validate="required" data-message-required="Seleccione un metodo de pago">
                        <option value=""> Seleccione....</option>
                        <?php $__currentLoopData = $metodoPago; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mPago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($mPago->METODO_PAGO); ?>"><?php echo e($mPago->METODO_PAGO); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if ($errors->has('mPago')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mPago'); ?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </div>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Número de documento</label>
                        <input type="text" name="docN" id="docN" class="form-control" data-numeric="true" data-validate="required,number" data-message-required="Ingrese un número de documento" placeholder="No. de documento">
                        <?php if ($errors->has('docN')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('docN'); ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="Metodo de pago">Servicio</label>
                    <select class="form-control" name="service" id="service" data-validate="required" data-message-required="Seleccione un metodo de pago">
                        <option value=""> Seleccione....</option>
                        <?php $__currentLoopData = $tipoSevicio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($service->ID_SERVICIO); ?>"><?php echo e($service->NOMBRE_PRODUCTO); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if ($errors->has('service')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service'); ?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </div>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Cantidad</label>
                        <input type="text" name="cantidad" id="cantidad" class="form-control" data-numeric="true" data-validate="required,number" data-message-required="Ingrese una cantidad valida" placeholder="Cantidad">
                        <?php if ($errors->has('cantidad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cantidad'); ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Fecha de envio</label>
                        <input type="text" name="date" id="date" class="form-control" data-mask="yyyy-mm-dd" aria-describedby="helpId" placeholder="yyyy-mm-dd">
                        <?php if ($errors->has('date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('date'); ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label for="direccion">Dirección de envio</label>
                    <input type="text" name="direc" id="direc" class="form-control" data-validate="required" data-message-required="Ingrese la dirección" placeholder="Dirección">
                    <?php if ($errors->has('direc')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('direc'); ?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </div>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <input type="hidden" name="pais" value="Colombia">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Ciudad</label>
                        <select class="form-control" name="ciudad" id="ciudad" data-validate="required" data-message-required="Seleccion" placeholder="Cantidad">
                            <option value=""> Seleccione....</option>
                            <?php $__currentLoopData = $nombreciudad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ciudad->NOMBRE_CIUDAD); ?>"><?php echo e($ciudad->NOMBRE_CIUDAD); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if ($errors->has('ciudad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ciudad'); ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                </div>
        </div>
            <div class="col-md-4 mb-3">
                <div style="height: 120px;" class=""></div>
            </div>
        </div>
            <div class="form-group">
                <center><label for="" class="text-muted">Observaciones (Opcional)</label></center>
                    <textarea class="form-control" name="obser" id="obser" rows="3"></textarea>
            </div>
            <center><button class="btn btn-primary float-right btn-lg" type="submit">Generar</button></center>
        </form>
    </div>
    </div>
</div>
</div>
</div>
    		<!-- Imported scripts on this page -->
            <script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.inputmask.bundle.js')); ?>"></script>
            <script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-chat.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('Scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/generarFactura.blade.php ENDPATH**/ ?>