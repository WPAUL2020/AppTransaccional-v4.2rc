@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                <img src="{{asset('Imagenes/crearsectorempresa.png')}}">

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Crear Sector de Empresa</strong>
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
                <h2> <center>REGISTRO SECTOR EMPRESA</center></h2>
                <form method="POST" action="{{URL::to('SectEmprTerCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
                <div class="form-group">
                <label>Digitar nombre del sector</label>
                    <input type="text" name="NOMBRE_SECTOR_EMPRESA_TERCERO" class="form-control" placeholder="Nombre del SECTOR">
                    <span class="text-danger">{{$errors->first("NOMBRE_SECTOR_EMPRESA_TERCERO")}}</span>
                     </div>
                    <div class="form-group">
                    <label>Descripciòn:</label>
                    <input type="text" name="DESCRIPCION" class="form-control" placeholder="Descripciòn">
                    <span class="text-danger">{{$errors->first("DESCRIPCION")}}</span>
                     </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('Sector')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection
