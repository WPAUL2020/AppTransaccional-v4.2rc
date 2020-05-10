@extends('layouts.app')

@section('content')
<title>Big Data E-Commerce</title>
<a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MI PERFIL</a>

                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">ZONA TRANSACCIONAL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('home')}}">HOME</a>
                   <br>
                   <br>
<div class="container">
    <div class="row">
        <div class="">
            <div class="card">
                <div class="card-header"><center><b>ZONA TRANSACCIONAL</b></center></div>
                </div>
<div class="row">
  <div class="col-sm-4">
  <br>
    <br>
    <div class="card">
    <br>
    <center><img src="{{ asset('Imagenes/Usuarios2.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('UsuariosTercero')}}">Gestión Usuarios Externos</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Usuarios.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('UsuariosInterno')}}">Gestión Usuarios Internos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Clientes.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Clientes')}}">Gestión Clientes</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Rol.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Roles')}}">Gestión Rol</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Cargo.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Cargos')}}">Gestión de Cargos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/SectorEmpresa.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Sector')}}">Gestión de Sector Empresa</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/BigData.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('instahunters')}}">Gestión BigData</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/MedioPago.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('MedioPagos')}}">Modo de Pago</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Categorias.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Categorias')}}">Categorias</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Servicio.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Servicios')}}">Servicio</a></center>
      </div>
      </div>
    </div>


  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Facturas.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      {{-- <center><a class="btn btn-primary" href="{{URL::to('/Factura')}}">Factura</a></center>} --}}
                <!-- Button trigger modal -->
                <center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Factura
        </button></center>
      </div>
    </div>
  </div>
  <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><strong><h3 class="modal-title text-muted">Generar factura</h3></strong></center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" placeholder="Nit" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Nit</small></strong>
                            <select class="form-control" name="mPago" id="mPago">
                                <option> Seleccione....</option>
    {{--                             @foreach ($collection as $item)
                                <option></option>
                                @endforeach --}}
                            </select>
                            <strong><label for="" class="text-muted">Metodo de pago</label></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" data-numeric="true" placeholder="No. de documento" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Número de documneto</small></strong>
                            <select class="form-control" name="service" id="service">
                                <option> Seleccione....</option>
    {{--                             @foreach ($collection as $item)
                                <option></option>
                                @endforeach --}}
                            </select>
                            <strong><label for="" class="text-muted">Servicio</label></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" data-numeric="true" placeholder="Cantidad" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Cantidad</small></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" data-mask="date" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Fecha de envio </small></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" aria-describedby="helpId" placeholder="Dirección">
                            <strong><small id="helpId" class="text-muted">Dirección de envio </small></strong>
                            <input type="hidden" name="" id="" class="form-control" value="Colombia">
                            <select class="form-control" name="service" id="service">
                                <option> Seleccione....</option>
    {{--                             @foreach ($collection as $item)
                                <option></option>
                                @endforeach --}}
                            </select>
                            <strong><label for="" class="text-muted">Ciudad</label></strong>
                            <div class="form-group">
                              <strong><label for="" class="text-muted">Observaciones</label></strong>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Generar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
	<!-- Imported scripts on this page -->
	<script src="{{ asset('neonFrontEnd/assets/js/jquery.inputmask.bundle.js') }}"></script>
@endsection
