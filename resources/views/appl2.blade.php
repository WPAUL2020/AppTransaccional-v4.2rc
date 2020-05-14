@extends('layouts.app')

@section('content')
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

				<!-- Category Filter -->
				<div class="btn-group alt-select-field" id="category-filter">

					<button type="button" class="btn btn-label" data-toggle="dropdown">Category</button>
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#" data-filter="design">Design &amp; Development</a>
						</li>
						<li>
							<a href="#" data-filter="campaign">Campaigns</a>
						</li>
						<li>
							<a href="#" data-filter="branding">Branding</a>
						</li>
						<li>
							<a href="#" data-filter="print">Print</a>
						</li>
					</ul>

				</div>

			</div>

		</div>

	</div>

</section>


<section class="portfolio-container">

	<div class="container">

		<div class="row" id="portfolio-items">
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('instahunters')}}" class="image">
						<img src="{{ asset('Imagenes/gestionBigDataFinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="{{URL::to('instahunters')}}" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="{{URL::to('instahunters')}}" class="btn btn-primary">Gestión Big Data</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('MedioPagos')}}" class="image">
						<img src="{{ asset('Imagenes/metododepagofinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="{{URL::to('MedioPagos')}}" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="{{URL::to('MedioPagos')}}" class="btn btn-primary">Gestión Usuarios Externos</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Categorias')}}" class="image">
						<img src="{{ asset('Imagenes/gestionSectorEmpresaFinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="{{URL::to('Categorias')}}" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="{{URL::to('Categorias')}}" class="btn btn-primary">Categorias</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Servicios')}}" class="image">
						<img src="{{ asset('Imagenes/Serviciosfinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="{{URL::to('Servicios')}}" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="{{URL::to('Servicios')}}" class="btn btn-primary">Servicio</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('/generarFactura')}}" class="image">
						<img src="{{ asset('Imagenes/addtocartfinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="{{URL::to('/generarFactura')}}" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="{{URL::to('/generarFactura')}}" class="btn btn-primary">Generar Factura</a></center>
					</h4>
				</div>

			</div>
            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">

                        <ul class="pagination">
                            <li>
                                <a href="{{URL::to('appl')}}"><i class="fas fa-angle-left"></i></a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
		</div>
	</div>

</section>


<script type="text/javascript">
jQuery(document).ready(function($)
{
	var $portfolio_items = $("#portfolio-items"),
		$category_filter = $("#category-filter");

	$portfolio_items.isotope({
		itemSelector: '.item',
		columnWidth: 1/4
	});

	$category_filter.on('change', function(ev, o)
	{
		var filter = o.el.data('filter');

		$portfolio_items.isotope({
			filter: o.isDefault ? '.item' : '.filter-' + filter
		});
	});

	$(window).on('neon.resize', function()
	{
		$portfolio_items.isotope('reLayout');
	});

	$portfolio_items.isotope('reLayout');
});
</script>
	<!-- Footer Widgets -->
<section class="footer-widgets">

	<div class="container">

		<div class="row">

			<div class="col-sm-6">

				<a href="#">
					<img src="assets/images/logo@2x.png" width="100" />
				</a>

				<p>
					Vivamus imperdiet felis consectetur onec eget orci adipiscing nunc. <br />
					Pellentesque fermentum, ante ac interdum ullamcorper.
				</p>

			</div>

			<div class="col-sm-3">

				<h5>Address</h5>

				<p>
					Loop, Inc. <br />
					795 Park Ave, Suite 120 <br />
					San Francisco, CA 94107
				</p>

			</div>

			<div class="col-sm-3">

				<h5>Contact</h5>

				<p>
					Phone: +1 (52) 2215-251 <br />
					Fax: +1 (22) 5138-219 <br />
					info@laborator.al
				</p>

			</div>

		</div>

	</div>

</section>

<!-- Site Footer -->
<footer class="site-footer">

	<div class="container">

		<div class="row">

			<div class="col-sm-6">
				Copyright &copy; Neon - All Rights Reserved.
			</div>

			<div class="col-sm-6">

				<ul class="social-networks text-right">
					<li>
						<a href="#">
							<i class="entypo-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-facebook"></i>
						</a>
					</li>
				</ul>

			</div>

		</div>

	</div>

</footer>
@endsection
