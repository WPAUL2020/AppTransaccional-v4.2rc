@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="{{asset('Imagenes/editarempresa.png')}}">

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Editar Empresa</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
        <div class="container fondo_container">
            <div class="row">
                    <div class="col-md-5">
                        <h2 class="col"> E<span>DITAR </span>E<span>MPRESA</span>: {{$clientes->NOMBRE}}</h2>
                        <div class="form-row">
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ URL:: to("GestionClientes/changeEmpresa/$clientes->ID_EMPRESA_TERCERO") }}"> {{ csrf_field() }}
        <div class="form-row">
                    <div class="col-sm-9">
                            <label>Dirección de la Compañia:</label>
                            <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn" value={{ $clientes->DIRECCION}}>
                            </div>
                            <div class="col-sm-9">
                            <label>Telefono de la Compañia</label>
                            <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono" value={{ $clientes->TELEFONO}}>
                            </div>
        </div>

        <div class="form-row">
                            <div class="col-sm-9">
                            <label>Ciudad:</label>
                            <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad"value={{ $clientes->CIUDAD}}>
                            </div>
                            <div class="col-sm-9">
                            <label>Sitio Web:</label>
                            <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web" value={{ $clientes->WEBSITE}}>
                            </div>
                       <!--      <div class="col-sm-9">
                            <label>Correo Electronico:</label>
                            <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico" value={{ $clientes->CORREO}}>
                            </div> -->
                     <!--        <div class="col-sm-9">
                            <label>Estado:</label>
                            <select name="ESTADO"class="form-control">
                            <option value="">--Escoja Estado--</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="DESACTIVADO">DESACTIVADO</option>
                            </select>
                            </div> -->
        </div>
        <br>
        <div class="row">
              <div class="form-group aaa">
                                <input type="submit" value="Guardar" class="btn btn-primary">
                                <a class="btn btn-secondary" href="{{URL::to('Clientes')}}">Regresar</a>
                            </div>
        </div>
        </form>
        </div>
</body>
</html>
@endsection
