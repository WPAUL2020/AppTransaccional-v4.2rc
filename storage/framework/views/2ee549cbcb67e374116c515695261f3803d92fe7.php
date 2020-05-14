<?php $__env->startSection('content'); ?>
	<!-- Breadcrumb -->
<section class="breadcrumb">

	<div class="container">

		<div class="row">

			<div class="col-sm-7">

				<h1>Zona Transaccional</h1>

							<ol class="breadcrumb bc-3" >
						<li>
				<a href="index.html"><i class="fa fa-home"></i>Home</a>
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
					<a href="<?php echo e(URL::to('UsuariosTercero')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/GestiondeUsuariosExternosFinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="<?php echo e(URL::to('UsuariosTercero')); ?>" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="<?php echo e(URL::to('UsuariosTercero')); ?>" class="btn btn-primary">Gestión Usuarios Externos</a></center>
					</h4>
				</div>

            </div>
			<div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('UsuariosInterno')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/gestionUsuariosInternosfinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="<?php echo e(URL::to('UsuariosInterno')); ?>" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="<?php echo e(URL::to('UsuariosInterno')); ?>" class="btn btn-primary">Gestión Usuarios Internos</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('Clientes')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/gestionClientesfinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="<?php echo e(URL::to('Clientes')); ?>" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="<?php echo e(URL::to('Clientes')); ?>" class="btn btn-primary">Gestión Clientes</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('Roles')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/rolfinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="<?php echo e(URL::to('Roles')); ?>" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="<?php echo e(URL::to('Roles')); ?>" class="btn btn-primary">Gestión Roles</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('Cargos')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/gestiondeCargosFinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="<?php echo e(URL::to('Cargos')); ?>" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="<?php echo e(URL::to('Cargos')); ?>" class="btn btn-primary">Gestión de Cargos</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="<?php echo e(URL::to('Sector')); ?>" class="image">
						<img src="<?php echo e(asset('Imagenes/gestionSectorEmpresaFinal.png')); ?>" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="<?php echo e(URL::to('Sector')); ?>" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="<?php echo e(URL::to('Sector')); ?>" class="btn btn-primary">Gestión de Sector Empresa</a></center>
					</h4>
				</div>

            </div>
            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">

                        <ul class="pagination">
                            <li class="active">
                                <a href="#"><i class="fas fa-angle-left"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo e(URL::to('appl2')); ?>"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
		</div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/appl.blade.php ENDPATH**/ ?>