@extends('layouts.app')

@section('content')

   <!-- Breadcrumb -->
   <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <img src="Imagenes/gestioncargos.png">

                <ol class="bc-3" >
                        <li>
                <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Cargos</strong>
                    </li>
                    </ol>

            </div>

        </div>

    </div>
</section>
<br>
<BR>
<div class="table100 ver2 m-b-110">
   <table class="table table-striped text-center" data-vertable="ver2">
                   <tr class="row100 head">
                       <th class="text-center">ID</th>
                       <th class="text-center">NOMBRE CARGO</th>
                       <th class="text-center">DESCRIPCIÓN</th>
                   </tr>
                   @foreach($cargo as $users1)
                   <tr class="row100">
                       <td>{{ $users1->ID_CARGO}}</td>
                       <td>{{ $users1->NOMBRE_CARGO}}</td>
                       <td>{{ $users1->DESCRIPCION}}</td>
                    </tr>
                   @endforeach

</table>
{!! $cargo->render() !!}
                <a class="btn btn-primary" href="{{URL::to('CargoCrear/agregar')}}">Agregar</a>
</div>
@endsection
