@extends('layouts.usuario')

@section('content')
	<!-- Breadcrumb -->

<section class="breadcrumb">

	<div class="container">

		<div class="row">

			<div class="col-sm-7">

				<h1>Zona Transaccional</h1>

							<ol class="bc-3" >
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


				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Categorias')}}" class="image">
						<img src="{{ asset('Imagenes/categoriasfinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

            </div>
            <div class="row">

                <div class="col-md-12">

                </div>
		</div>
	</div>

</section>

@endsection
