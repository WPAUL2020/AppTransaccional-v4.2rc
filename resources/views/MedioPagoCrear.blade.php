@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="Imagenes/crearmediosdepago.png">
                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Crear Medios de Pago</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>REGISTRO METODO DE PAGO</center></h2>
                <form method="POST" action="{{URL::to('MedioPagoCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
                <div class="form-group">
                <label>Digitar metodo de Pago</label>
                    <input type="text" name="METODO_PAGO" class="form-control" placeholder="NOMBRE METODO DE PAGO">
                    <span class="text-danger">{{$errors->first("METODO_PAGO")}}</span>
                     </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('MedioPagos')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
