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
                <div class="card-body">
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
                    </div>
                </div>
                <div class="card-body">
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
                    </div>
                </div>
                <div class="card-body">
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
                    </div>
                </div>
                <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/instahunters.blade.php ENDPATH**/ ?>