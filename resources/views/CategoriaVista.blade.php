@extends('layouts.app')

@section('content')
   <!-- Breadcrumb -->
   <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <h1>Gestión Categoria</h1>

                <ol class="breadcrumb bc-3" >
                        <li>
                <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Categoria</strong>
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
                       <th class="text-center">CATEGORIAS</th>
                   </tr>
                   @foreach($Categorias as $users1)
                   <tr><td>{{ $users1->ID_CATEGORIA}}</td>
                       <td>{{ $users1->NOMBRE_CATEGORIA}}</td>
                       </tr>
                   @endforeach

</table>
{!! $Categorias->render() !!}
                <a class="btn btn-primary" href="{{URL::to('CategoriaCrear/agregar')}}">Agregar</a>
</div>
@endsection
