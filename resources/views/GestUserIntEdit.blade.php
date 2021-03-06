@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="{{asset('Imagenes/editarempleadosint.png')}}">

                    <ol class=" bc-3" >
                            <li>
                                <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                            </li>
                            <li class="active">
                                <strong>Editar Usuarios</strong>
                            </li>
                    </ol>
            </div>
        </div>

        </div>
</section>
<div class="container fondo_container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="col"> E<span>DITAR</span> E<span>MPLEADO</span>: {{$EmpleadosInterno->NOMBRE}}</h2>
                <div class="form-row">
                </div>
                </div>
                </div>
            <form method="POST" action="{{ URL:: to("GestUserIntVista/changeUser/$EmpleadosInterno->ID_EMPLEADO_INTERNO") }}"> {{ csrf_field() }}

            <div class="form-row">
                <div class="col-sm-9">
                    <label>Direcciòn de</label>
                    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn" value={{ $EmpleadosInterno->DIRECCION}}>
                    <span class="text-danger">{{$errors->first("DIRECCION")}}</span>
                </div>
                <div class="col-sm-9">
                    <label>Telefono:</label>
                    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono" value={{ $EmpleadosInterno->TELEFONO}}>
                    <span class="text-danger">{{$errors->first("TELEFONO")}}</span>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-9">
                     <label>Ciudad:</label>
                        <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad" value={{ $EmpleadosInterno->CIUDAD}}>
                        <span class="text-danger">{{$errors->first("CIUDAD")}}</span>
                </div>
                <div class="col-sm-9">
                        <label>Correo Electronico:</label>
                        <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico" value={{ $EmpleadosInterno->CORREO}}>
                        <span class="text-danger">{{$errors->first("CORREO")}}</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-9">
                        <label>Telefono Oficina:</label>
                        <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina" value={{ $EmpleadosInterno->TELEFONO_OFICINA}}>
                        <span class="text-danger">{{$errors->first("TELEFONO_OFICINA")}}</span>
                    </div>
                    {{-- <div class="col-sm-9">
                            <label>Extenciòn:</label>
                            <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn" value={{ $EmpleadosInterno->EXTENSION}}>
                            <span class="text-danger">{{$errors->first("EXTENSION")}}</span>
                        </div> --}}
                </div>

                <div class="form-row">
                    <div class="col-sm-9">
                        <label for="">Cargo del Funcionario:</label>
                        <select name="ID_CARGO" id="ID_CARGO" class="form-control">
                        <option value="">--Escoja Tipo de Cargo--</option>
                                            @foreach($cargos as $cargo)
                                                <option value="{{$cargo->NOMBRE_CARGO}}">{{$cargo->NOMBRE_CARGO}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{$errors->first("ID_CARGO")}}</span>
                    </div>
                <div class="col-sm-9">
                            <label for="">Rol del Funcionario:</label>
                            <select name="ID_ROL" id="ID_ROL" class="form-control">
                            <option value="">--Escoja Tipo de Rol--</option>
                                            @foreach($roles as $rol)
                                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                                            @endforeach
                            </select>
                            <span class="text-danger">{{$errors->first("ID_ROL")}}</span>
                </div>
             </div>

         <!--    {{-- <div class="form-group">
                 <label>Observaciones:</label>
                <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
            </div>
            <span class="text-danger">{{$errors->first("OBSERVACION")}}</span> --}} -->

                        <div class="row">
                                            <div class="form-group aaa">
                                                <input type="submit" value="Guardar" class="btn btn-primary">
                                                <a class="btn btn-secondary" href="{{URL::to('UsuariosInterno')}}">Regresar</a>
                                            </div>
                        </div>

 </form>

</div>
</body>
</html>
@endsection
