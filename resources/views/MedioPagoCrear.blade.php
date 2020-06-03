@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                <img src="{{asset('Imagenes/crearmediosdepago.png')}}">
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
    <div class="container fondo_container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="col">R<span>EGISTRO</span> M<span>ETODO DE </span>P<span>AGO</span></h2>
                 <div class="form-row">
            </div>
            </div>
        </div>
        <form method="POST" action="{{URL::to('MedioPagoCrear/guardar')}}"> {{ csrf_field() }}
        <div class="form-row">
            <div class="col-sm-9">
                <label>Digitar metodo de Pago</label>
                    <input type="text" name="METODO_PAGO" class="form-control" placeholder="NOMBRE METODO DE PAGO">
                    <span class="text-danger">{{$errors->first("METODO_PAGO")}}</span>
            </div>
        </div>
<br>
        <div class="row">
            <div class="form-group aaa">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('MedioPagos')}}">Regresar</a>
                    </div>
                </div>    
</form>
</div>
</body>
</html>
@endsection
