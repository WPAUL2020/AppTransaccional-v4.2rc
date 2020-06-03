@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="{{asset('Imagenes/crearcargo.png')}}">

                                <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro De Cargos</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
    <div class="container fondo_container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="col">R<span>EGISTRO DE</span> C<span>ARGOS</span></h2>
                <div class="form-row">
                </div>
            </div>
        </div>
        <form method="POST" action="{{URL::to('CargoCrear/guardar')}}"> {{ csrf_field() }}
            <div class="form-row">
                <div class="col-sm-9">
                    <label>Cargo a Registrar</label>
                    <input type="text" name="NOMBRE_CARGO" class="form-control" placeholder="Nombre del Cargo">
                    <span class="text-danger">{{$errors->first("NOMBRE_CARGO")}}</span>
                </div>
                <div class="col-sm-9">
                    <label>Dependencia del Cargo</label>
                        <select type="" name="DEPENDENCIA" class="form-control">
                                <option value="">--Escoja Tipo de Dependencia--</option>
                                <option>TIC</option>
                                <option>ADMINISTRACION</option>
                                <option>OPERACION</option>
                                <option>DIRECCION</option>
                       </select>
                       <span class="text-danger">{{$errors->first("DEPENDENCIA")}}</span>
                </div>
                <div class="col-sm-9">
                    <label>Descripciòn:</label>
                    <input type="text" name="DESCRIPCION" class="form-control" placeholder="Descripciòn">
                    <span class="text-danger">{{$errors->first("DESCRIPCION")}}</span>
                </div>
            </div>
<br>
        <div class="row">
                <div class="form-group aaa">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="{{URL::to('Cargos')}}">Regresar</a>
                </div>
        </div>    
 </form>
</div>
</body>
</html>
@endsection
