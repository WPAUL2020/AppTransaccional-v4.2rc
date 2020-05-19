@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestionar Usuarios</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestionar Usuarios</strong>
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
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">E-MAIL</th>
                       <th class="text-center">PERFIL</th>
                       <th class="text-center">ROL</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($users as $users1)
                   <tr class="row100">
                       <td>{{ $users1->id }}</td>
                       <td>{{ $users1->name }}</td>
                       <td>{{ $users1->email }}</td>
                       <td>{{ $users1->rol }}</td>
                       <td>{{ $users1->estado }}</td>
                       <td>
                           <a href="EditarUsuarios/updateUser/{{$users1->id}}" class="btn btn-secondary">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $users->render() !!}
                <a class="btn btn-primary" href="{{URL::to('register')}}">Agregar</a>
</div>
@endsection
