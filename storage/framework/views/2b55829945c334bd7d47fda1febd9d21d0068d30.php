<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>InstaHunters</h1>

                    <ol class="bc-3">
                            <li>
                    <a href="<?php echo e(URL::to('appl4')); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>InstaHunters</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>
<div class="container fondo_container">
    <div class="row justify-content-center">
        <div class="col-md-8 aliniar">
            <div class="card">
                <div class="card-header1 text-center display-4">
                    <img src="Imagenes/Instahunterss.gif">
                </div>

                <div class="card-body display-4">
                    <form method="POST" action="<?php echo e(route('scrapPost')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                         <div class="form-group1 row card-header text-center display-4">
                            <div>
                                <?php if ($errors->has('optionScrap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('optionScrap'); ?>
                                <label class="alert alert-danger" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </label>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                <h3>@ Usuario</h3><input type="radio" id="usu" name="optionScrap" value="hashtag">
                                <label for="usu" class="lbl">  </label>
                            </div>
                            <div class="letra">
                                <h3># Hashtag </h3><input type="radio" id="has" name="optionScrap" value="hashtag">
                                <label for="has" class="lbl"> </label>
                            </div>

                        </div>
                        <div class="form-group2 row card-header text-center display-4">
                            <?php if ($errors->has('palabraClave')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('palabraClave'); ?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </div>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            <input type="text" class="" name="palabraClave" autocomplete="off" required>
                            <label class="lbl2">
                                <span class="lbltex">Busqueda...</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="card-header text-center display-4">
                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="buscar">
                                   Buscar <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <a href="<?php echo e(URL::to('cliente-instahuntersvista')); ?>" class="btn btn-info float-right btn-lg">
                                Busquedas realizadas <i class="fas fa-eye"></i>
                            </a>
                        </div>
                </div>
            </div>
            <center>
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                  <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Universitaria de Colombia. </a>
                </div>
            </center>
        </div>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.usuario', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/cliente-instahunters.blade.php ENDPATH**/ ?>