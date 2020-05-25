<?php $__env->startSection('content'); ?>
	<!-- Breadcrumb -->

<section class="breadcrumb">

	<div class="container">

		<div class="row">

			<div class="col-sm-7">

				<h1>Zona Transaccional</h1>

							<ol class="bc-3" >
						<li>
				<a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> Home</a>
			</li>
				<li class="active">
							<strong>Zona Transaccional</strong>
					</li>
					</ol>

			</div>

			<div class="col-sm-5">

			</div>

		</div>

	</div>

</section>

<section class="portfolio-container">

	<div class="container">

		<div class="row" id="portfolio-items">
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('instahunters')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/gestionBigDataFinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
                <a href="<?php echo e(URL::to('UsuariosTercero')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/GestiondeUsuariosExternosFinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>
				</div>
            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('Categorias')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/categoriasfinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('/generarFactura')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/addtocartfinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

			</div>
            <div class="row">

                <div class="col-md-12">
                <div class="text-center">
                    <ul class="pagination">
                        <li class="active">
                            <a href="<?php echo e(URL::to('appl')); ?>"><i class="fas fa-angle-left"></i></a>
                             </li>
                        <li>
                        <a href=""><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>

</div>
                </div>
		</div>
	</div>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/appl2.blade.php ENDPATH**/ ?>