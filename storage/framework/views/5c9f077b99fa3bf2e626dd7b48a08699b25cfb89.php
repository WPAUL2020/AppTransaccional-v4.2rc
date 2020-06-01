<?php $__env->startSection('content'); ?>
        <!-- Breadcrumb -->
        <section class="breadcrumb">

            <div class="container">

                <div class="row">

                    <div class="col-sm-9">

                        <h1>Vista Previa</h1>

                                    <ol class="bc-3" >
                                <li>
                        <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
                    </li>
                            <li>

                                    <a href="<?php echo e(url('instahunters')); ?>">InstaHunters <i class="fas fa-spider"></i></a>
                            </li>
                        <li class="active">
                            <a href="<?php echo e(url('instahuntersvista  ')); ?>"> Busquedas Realizadas <i class="fas fa-eye"></i></strong></a>
                            </li>
                            </ol>

                    </div>

                </div>

            </div>
        </section>
    <!-- Blog -->
    <section class="blog">

        <div class="container">

            <div class="row">

                <div class="col-sm-8">

                    <div class="blog-posts">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Blog Post -->
                        <div class="blog-post">

                            <div class="post-thumb">

                                <a href="https://<?php echo e($datos['originalPost']); ?>">
                                    <img src="<?php echo e($datos['img']); ?>" class="img-rounded" />
                                    <span class="hover-zoom"></span>
                                </a>

                            </div>

                            <div class="post-details">

                                <h3>
                                    <a href="https://<?php echo e($datos['originalPost']); ?>">Post Original</a>
                                </h3>

                                <div class="post-meta">

                                    <div class="meta-info">
                                        <i class="entypo-calendar"></i> <?php echo e($datos['time']); ?></div>

                                    <div class="meta-info">
                                        <i class="entypo-comment"></i>
                                        <?php echo e($datos['comentarios']); ?>

                                    </div>

                                    <div class="meta-info">
                                        <i class="far fa-thumbs-up"></i>
                                        <?php echo e($datos['likes']); ?>

                                    </div>


                                </div>

                                <p><?php echo e($datos['txt']); ?></p>

                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <form action="<?php echo e(URL:: to("instahunterview/download/$id")); ?>" method="POST"> <?php echo e(csrf_field()); ?>


                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                                    Download Data <i class="fas fa-file-download"></i>
                                 </button>
                            </form>

                        <!-- Blog Pagination -->
                        <div class="text-center">

                            <ul class="pagination">
                                <li class="active">
                                    <?php echo e($data->links()); ?>

                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-sm-4">

                    <!-- List Sidebar -->
    <div class="sidebar">

        <h3>
            <form action="<?php echo e(URL:: to("instahunterview/download/$id")); ?>" method="POST"> <?php echo e(csrf_field()); ?>

                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                    Download Data <i class="fas fa-file-download"></i>
                 </button>
            </form>
        </h3>
        <div class="sidebar-content">
            Elementos listos a descargar
            <ul>
                <li>
                    
                </li>
            </ul>
        </div>
    </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/instahunterview.blade.php ENDPATH**/ ?>