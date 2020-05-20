@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Registrar Servicio</h1>

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registrar Servicio</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>

<body>
    <div class="container fondo_container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> REGISTRO DE SERVICIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to('ServicioCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col">
    <label for="">Categoria:</label>
        <select name="ID_CATEGORIA" id="ID_CATEGORIA" class="form-control">
        <option value="">--Escoja Tipo de Categoria--</option>
            @foreach($Categorias as $Categoria)
                <option value="{{$Categoria->ID_CATEGORIA}}">{{$Categoria->NOMBRE_CATEGORIA}}</option>
            @endforeach
        </select>
        <span class="text-danger">{{$errors->first("ID_CATEGORIA")}}</span>
    </div>
    <div class="col">
    <label>Nombre del Servicio:</label>
    <input type="text" name="NOMBRE_PRODUCTO" class="form-control" placeholder="Nombre Servicio">
    <span class="text-danger">{{$errors->first("NOMBRE_PRODUCTO")}}</span>
    </div>
    <div class="col">
    <label>Precio Unitario:</label>
    <input type="text" name="PRECIO_UNITARIO" class="form-control" placeholder="Precio Unitario">
    <span class="text-danger">{{$errors->first("PRECIO_UNITARIO")}}</span>
    </div>
  </div>
  <br>
<div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('Servicios')}}">Regresar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

