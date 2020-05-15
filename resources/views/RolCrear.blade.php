@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Crear Rol de Usuario</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Crear Rol de Usuario</strong>
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
                <h2> <center>REGISTRO ROL USUARIO</center></h2>
                <form method="POST" action="{{URL::to('RolCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
                <div class="form-group">
                <label>Rol a Registrar</label>
                    <input type="text" name="NOMBRE_ROL" class="form-control" placeholder="Nombre del Rol">
                    <span class="text-danger">{{$errors->first("NOMBRE_ROL")}}</span>
                     </div>
                    <div class="form-group">
                    <label>Descripciòn:</label>
                    <select type="" name="DESCRIPCION" class="form-control">
                    <option value="">--Escoja Descripciòn del Cargo--</option>
                                <option>ADMINISTRADOR TECNOLOGIA</option>
                                <option>USUARIO INTERNO</option>
                                <option>ADMINISTRADOR CLIENTE</option>
                                <option>USUARIO CLIENTE</option>
                       </select>
                    <span class="text-danger">{{$errors->first("DESCRIPCION")}}</span>
                     </div>
                     <div class="form-group">
                    <label>Dependencia del Cargo</label>
                        <select type="" name="DEPENDENCIA" class="form-control">
                        <option value="">--Escoja Dependencia del Cargo--</option>
                                <option>TIC</option>
                                <option>ADMINISTRACION</option>
                                <option>OPERACION</option>
                                <option>DIRECCION</option>
                                <option>GENERAL</option>
                       </select>
                       <span class="text-danger">{{$errors->first("DEPENDENCIA")}}</span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('Roles')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
