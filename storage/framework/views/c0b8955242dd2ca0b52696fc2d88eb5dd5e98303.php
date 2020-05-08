<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center display-4"><h1> InstaHunters <i class="fas fa-spider"></i>
                </div>
                <div class="card-header text-center text-primary display-4 ">
                    <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/" class="text-primary"> by Semillero Ing. de Sistemas, Universitaria de Colombia.</a></div>
                <div class="card-body display-4">
                    <form method="POST" action="<?php echo e(URL::to('instahunters/instahunters')); ?>" class="form-horizontal"> <?php echo e(csrf_field()); ?>

                         <div class="form-group row card-header text-center display-4">
                            <select name="campoSelect" class="form-control">
                                <option class="">Seleccionar..</option>
                                <option value="usuario">@Usuario</option>
                                <option value="hashtag">#Hashtag</option>
                            </select>
                        </div>
                        <div class="form-group row card-header text-center display-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Ingrese la palabra clave (username o hashtag)" name="palabraClave" required>
                        </div>

                        <div class="form-group">
                            <div class="card-header text-center display-4">
                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="buscar">
                                   Buscar <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <a href="<?php echo e(URL::to('instahunterview')); ?>" class="btn btn-info float-right btn-lg">
                                Vista previa <i class="fas fa-eye"></i>
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
<footer>
    <?php if($data2view!=null): ?>
        <div>
            <?php echo $success; ?>

        </div>
    <?php else: ?>
    <div>
    </div>
    <?php endif; ?>
</footer>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.InstaHuntershow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional v3.2rc\resources\views/instahunters.blade.php ENDPATH**/ ?>