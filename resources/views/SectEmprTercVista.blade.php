@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion de Sector Empresa</h1>

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion de Sector Empresa</strong>
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
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">SECTOR DE LA EMPRESA</th>
                       <th class="text-center">DESCRIPCION</th>
                   </tr>
                   @foreach($sector as $users1)
                   <tr><td>{{ $users1->ID_SECTOR_EMPRESA_TERCERO}}</td>
                       <td>{{ $users1->NOMBRE_SECTOR_EMPRESA_TERCERO}}</td>
                       <td>{{ $users1->DESCRIPCION}}</td>
                       </tr>
                   @endforeach

</table>
{!! $sector->render() !!}
                <a class="btn btn-primary" href="{{URL::to('SectEmprTerCrear/agregar')}}">Agregar</a>
</div>
@endsection
