@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Editar Rol de Usuario</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Editar Rol de Usuario</strong>
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
                     </div>
                    <div class="form-group">
                    <label>Descripciòn:</label>
                    <input type="text" name="DESCRIPCION" class="form-control" placeholder="Descripciòn">
                     </div>
                     <div class="form-group">
                    <label>Dependencia del Cargo</label>
                        <select type="" name="DEPENDENCIA" class="form-control">
                                <option></option>
                                <option>TIC</option>
                                <option>ADMINISTRACION</option>
                                <option>OPERACION</option>
                                <option>DIRECCION</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('Roles')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
