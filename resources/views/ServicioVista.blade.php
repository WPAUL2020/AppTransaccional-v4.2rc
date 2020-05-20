@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion de Servicios</h1>

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion de Servicios</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID SERVICIO</th>
                       <th class="text-center">CATEGORIA</th>
                       <th class="text-center">NOMBRE SERVICIO</th>
                       <th class="text-center">PRECIO UNITARIO</th>

                   </tr>
                   @foreach($Servicios as $users1)
                   <tr><td>{{ $users1->ID_SERVICIO}}</td>
                       <td>{{ $users1->NOMBRE_CATEGORIA}}</td>
                       <td>{{ $users1->NOMBRE_PRODUCTO}}</td>
                       <td>{{ $users1->PRECIO_UNITARIO }}</td>
                       </tr>
                   @endforeach

</table>
{!! $Servicios->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('ServicioCrear/agregar')}}">Agregar</a>
</div>
@endsection
