@extends('layouts.app')

@section('content')
	<!-- Breadcrumb -->
<section class="breadcrumb">

	<div class="container">

		<div class="row">

			<div class="col-sm-7">

				<img src="Imagenes/zonatransaccional.png">

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
					<a href="{{URL::to('UsuariosTercero')}}" class="image">
						<img src="{{ asset('Imagenes/GestiondeUsuariosExternosFinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

				</div>

            </div>
			<div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('UsuariosInterno')}}" class="image">
						<img src="{{ asset('Imagenes/gestionUsuariosInternosfinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Clientes')}}" class="image">
						<img src="{{ asset('Imagenes/gestionClientesfinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Cargos')}}" class="image">
						<img src="{{ asset('Imagenes/gestiondeCargosFinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


				</div>

            </div>
            <div class="item col-sm-4 col-xs-6 filter-design">

				<div class="portfolio-item">
					<a href="{{URL::to('Sector')}}" class="image">
						<img src="{{ asset('Imagenes/gestionSectorEmpresaFinal.png')}}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>


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
                                <a href="{{URL::to('appl2')}}"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
		</div>
    </div>
</section>
@endsection
