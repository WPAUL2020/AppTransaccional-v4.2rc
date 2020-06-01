@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                <img src="{{asset('Imagenes/gestionmediosdepago.png')}}">

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion Medios de Pago</strong>
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
                       <th class="text-center">MEDIO DE PAGO</th>
                   </tr>
                   @foreach($MedioPagos as $users1)
                   <tr class="row100">
                       <td>{{ $users1->ID_PAGO}}</td>
                       <td>{{ $users1->METODO_PAGO}}</td>
                    </tr>
                   @endforeach

</table>
{!! $MedioPagos->render() !!}
                <a class="btn btn-primary" href="{{URL::to('MedioPagoCrear/agregar')}}">Agregar</a>
</div>
@endsection
