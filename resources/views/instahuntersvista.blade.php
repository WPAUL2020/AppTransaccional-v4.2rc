@extends('layouts.app')
@section('content')
  <!-- Breadcrumb -->
  <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <h1>Gestión Big Data</h1>

                <ol class=" bc-3" >
                        <li>
                <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Big Data / Busquedas Realizadas</strong>
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
                       <th class="text-center">BUSQUEDA REALIZADA</th>
                       <th class="text-center">FECHA DE BUSQUEDA</th>
                       <th class="text-center">ACCION</th>
                   </tr>

                   @foreach($data as $datos)
                <tr class="row100">
                    <td>{{ $datos->wordSearch}}</td>
                    <td>{{ $datos->consulta_log}}</td>

                       <td>
                       <a a href="instahunters/Estadistica/{{$datos->_id}}" class="btn btn-secondary">VER ESTADISTICA</a>
                           <a a href="#" class="btn btn-info">VISTA PREVIA <i class="fas fa-eye"></i></a>
                       </td>
                       </tr>
                   @endforeach

</table>
</div>
@endsection
