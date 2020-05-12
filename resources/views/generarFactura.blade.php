@extends('layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Generar Factura</h1>

                                <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{ url('/home') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                    <li class="active">
                                <strong>Generar Factura</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
    <header style="height: 70px">
    </header>
    <div style="height: 30px;" class=""></div>
    <div class="container page-body boxed-layout">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <center>
        <div class="card-header">
            <a href="#">
                <img src="{{ asset('Imagenes/logo.png') }}" width="185" alt="" />
            </a>
        </div>
        </center>

        <div class="card-body">
            <form method="POST" action="{{URL::to('Factura')}}" class="form-horizontal"> {{ csrf_field() }}
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="Nit">Nit</label>
                        <input name="Nit" type="text" class="form-control" id="Nit" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit">
                        @error('Nit')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="Metodo de pago">Metodo de pago</label>
                        <select class="form-control" name="mPago" id="mPago" data-validate="required" data-message-required="Seleccione un metodo de pago">
                        <option value=""> Seleccione....</option>
                        @foreach ($metodoPago as $mPago)
                            <option value="{{$mPago->METODO_PAGO}}">{{$mPago->METODO_PAGO}} </option>
                        @endforeach
                    </select>
                    @error('mPago')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Número de documento</label>
                        <input type="text" name="docN" id="docN" class="form-control" data-numeric="true" data-validate="required,number" data-message-required="Ingrese un número de documento" placeholder="No. de documento">
                        @error('docN')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="Metodo de pago">Servicio</label>
                    <select class="form-control" name="service" id="service" data-validate="required" data-message-required="Seleccione un metodo de pago">
                        <option value=""> Seleccione....</option>
                        @foreach ($tipoSevicio as $service)
                            <option value="{{$service->NOMBRE_PRODUCTO}}">{{$service->NOMBRE_PRODUCTO}} </option>
                        @endforeach
                    </select>
                    @error('service')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Cantidad</label>
                        <input type="text" name="cantidad" id="cantidad" class="form-control" data-numeric="true" data-validate="required,number" data-message-required="Ingrese una cantidad valida" placeholder="Cantidad">
                        @error('cantidad')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Fecha de envio</label>
                        <input type="text" name="date" id="date" class="form-control" data-mask="date" aria-describedby="helpId" placeholder="dd/mm/yyyy">
                        @error('date')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label for="direccion">Dirección de envio</label>
                    <input type="text" name="direc" id="direc" class="form-control" data-validate="required" data-message-required="Ingrese la dirección" placeholder="Dirección">
                    @error('direc')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <input type="hidden" name="pais" value="Colombia">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="direccion">Ciudad</label>
                        <select class="form-control" name="ciudad" id="ciudad" data-validate="required" data-message-required="Seleccion" placeholder="Cantidad">
                            <option value=""> Seleccione....</option>
                            @foreach ($nombreciudad as $ciudad)
                            <option value="{{$ciudad->NOMBRE_CIUDAD}}">{{$ciudad->NOMBRE_CIUDAD}}</option>
                            @endforeach
                        </select>
                        @error('ciudad')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                </div>
                </div>
        </div>
            <div class="col-md-4 mb-3">
                <div style="height: 120px;" class=""></div>
            </div>
        </div>
            <div class="form-group">
                <center><label for="" class="text-muted">Observaciones (Opcional)</label></center>
                    <textarea class="form-control" name="obser" id="obser" rows="3"></textarea>
            </div>
            <center><button class="btn btn-primary" type="submit">Generar</button></center>
        </form>
    </div>
    </div>
</div>
</div>
</div>


@endsection
