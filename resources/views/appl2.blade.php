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
				<a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
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
						<center><a href="{{URL::to('MedioPagos')}}" class="btn btn-primary">Medios de pago</a></center>
					</h4>
				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Categorias')}}" class="image">
						<img src="{{ asset('Imagenes/categoriasfinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="{{URL::to('Categorias')}}" class="like">
							<i class="entypo-heart"></i>
						</a>
						<center><a href="{{URL::to('Categorias')}}" class="btn btn-primary">Productos</a></center>
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

@endsection
