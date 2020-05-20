@extends('layouts.app')

@section('content')
   <!-- Breadcrumb -->
   <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <h1>Gestión Productos</h1>

                <ol class=" bc-3" >
                        <li>
                <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Productos</strong>
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
                   <tr><th class="text-center">NOMBRE DEL PRODUCTO</th>
                       <th class="text-center">DETALLE DEL PRODUCTO</th>
                   </tr>
                   @foreach($Categoria as $users1)
                   <tr><td>{{ $users1->NOMBRE_PRODUCTO_SERV_T}}</td>
                       <td>{{ $users1->	DETALLE_PRODUCTO_SERV_T}}</td>
                       </tr>
                   @endforeach

</table>
                <a class="btn btn-primary" href="{{URL::to('CategoriaCrear/agregar')}}">Agregar</a>
</div>
@endsection
