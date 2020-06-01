@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                  <img src="{{asset('Imagenes/gestionclientes.png')}}">

                                <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro De Empresas</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
<body>
<div class="container fondo_container">
    <div class="row">
            <div class="">
                <h2> REGISTRO DE EMPRESAS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to('clientes/guardar')}}"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col-sm-6">
    <label for="">Tipo de Sector de La compañia:</label>
        <select name="ID_SECTOR_EMPRESA_TERCERO" id="ID_SECTOR_EMPRESA_TERCERO" class="form-control">
        <option value="">--Escoja Tipo de Sector de la Empresa--</option>
            @foreach($SectorEmpresas as $SectorEmpresa)
                <option value="{{$SectorEmpresa->ID_SECTOR_EMPRESA_TERCERO}}">{{$SectorEmpresa->NOMBRE_SECTOR_EMPRESA_TERCERO}}</option>
            @endforeach
        </select>
        <span class="text-danger">{{$errors->first("ID_SECTOR_EMPRESA_TERCERO")}}</span>
    </div>
    <div class="col-sm-6">
    <label>Nombre Completo de la Compañia:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    <span class="text-danger">{{$errors->first("NOMBRE")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-6">
    <label>Direcciòn de la Compañia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    <span class="text-danger">{{$errors->first("DIRECCION")}}</span>
    </div>
    <div class="col-sm-6">
    <label>Telefono de la Compañia</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    <span class="text-danger">{{$errors->first("TELEFONO")}}</span>
    </div>
  </div>
  <div class="form-row">
    <div class="col-sm-6">
    <label for="" style="color:white">Ciudad:</label>
                <select name="CIUDAD" id="ID_CIUDAD" class="form-control">
                 <option value="">--Escoje la ciudad--</option>
                    @foreach($Ciudad as $Ciudad)
                         <option value="{{$Ciudad->NOMBRE_CIUDAD}}">{{$Ciudad->NOMBRE_CIUDAD}}</option>
                    @endforeach
        </select>
        <span class="text-danger">{{$errors->first("CIUDAD")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-6">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    <span class="text-danger">{{$errors->first("CORREO")}}</span>
    </div>

    <div class="col-sm-6">
    <label>Sitio Web:</label>
    <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web">
    <span class="text-danger">{{$errors->first("WEBSITE")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-6">
    <label>NIT de la compañia:</label>
    <input type="text" name="NIT" class="form-control" placeholder="NIT de la compañia">
    <span class="text-danger">{{$errors->first("NIT")}}</span>
    </div>

  <div class="col-sm-6">
    <label>Usuario:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario Correo">
    <span class="text-danger">{{$errors->first("USUARIO")}}</span>
  </div>

  <div class="col-sm-6">
    <label>Contraseña:</label>
    <input type="password" name="CONTRASENA" class="form-control" placeholder="PASSWORD">
    <span class="text-danger">{{$errors->first("CONTRASENA")}}</span>
  </div>
  </div>


  <div class="form-row">
    <div class="col-sm-6">
    <label for="">Rol del Propietario:</label>
        <select name="ID_ROL" id="ID_ROL" class="form-control">
        <option value="">--Escoja Tipo de Rol--</option>
            @foreach($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->name}}</option>
            @endforeach
        </select>
        <span class="text-danger">{{$errors->first("ID_ROL")}}</span>
    </div>
    <div class="col-sm-6">
    <label>Estado:</label>
    <select name="ESTADO"class="form-control">
    <option value="">--Escoja Estado--</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="DESACTIVADO">DESACTIVADO</option>
    </select>
    <span class="text-danger">{{$errors->first("ESTADO")}}</span>
  </div>
  </div>
  
  <div class="form-group lb">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
    <span class="text-danger">{{$errors->first("OBSERVACION")}}</span>
  </div>
  

  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('Clientes')}}">Regresar</a>
  </div>
  </div>
</form>
</div>
</body>
</html>
@endsection
