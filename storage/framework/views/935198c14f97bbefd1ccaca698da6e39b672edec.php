<?php $__env->startSection('content'); ?>
        <!-- Breadcrumb -->
        <section class="breadcrumb">

            <div class="container">

                <div class="row">

                    <div class="col-sm-9">

                        <h1>Vista Previa</h1>

                                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> Home</a>
                    </li>
                            <li>

                                    <a href="<?php echo e(url('instahunters')); ?>">InstaHunters <i class="fas fa-spider"></i></a>
                            </li>
                        <li class="active">

                                    <strong>Vista Previa <i class="fas fa-eye"></i></strong>
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
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Blog Post -->
                        <div class="blog-post">

                            <div class="post-thumb">

                                <a href="#">
                                    <img src="<?php echo e($data->img); ?>" class="img-rounded" />
                                    <span class="hover-zoom"></span>
                                </a>

                            </div>

                            <div class="post-details">

                                <h3>
                                    <a href="#">Post</a>
                                </h3>

                                <div class="post-meta">

                                    <div class="meta-info">
                                        <i class="entypo-calendar"></i> <?php echo e($data->date); ?></div>

                                    <div class="meta-info">
                                        <i class="entypo-comment"></i>
                                        <?php echo e($data->comentarios); ?>

                                    </div>

                                    <div class="meta-info">
                                        <i class="far fa-thumbs-up"></i>
                                        <?php echo e($data->likes); ?>

                                    </div>


                                </div>

                                <p><?php echo e($data->txt); ?></p>

                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <form action="<?php echo e(URL::to('instahunterview')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                                    Download Data <i class="fas fa-file-download"></i>
                                 </button>
                            </form>

                        <!-- Blog Pagination -->
                        <div class="text-center">

                            <ul class="pagination">
                                <li class="active">
                                    <?php echo e($items->links()); ?>

                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-sm-4">

                    <!-- List Sidebar -->
    <div class="sidebar">

        <h3>
            <form action="<?php echo e(URL::to('instahunterview')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                    Download Data <i class="fas fa-file-download"></i>
                 </button>
            </form>
        </h3>
        <div class="sidebar-content">
            Elementos listos a descargar
            <ul>
                <li>
                    <a href="#">Total <span>(<?php echo e($countItem); ?>)</span></a>
                </li>
            </ul>
        </div>
    </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional-v4.2rc\resources\views/instahunterview.blade.php ENDPATH**/ ?>