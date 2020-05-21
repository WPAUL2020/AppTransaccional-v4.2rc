@extends('layouts.app')

@section('content')




    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Registro de Usuarios</h1>

                    <ol class="bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro de Usuario</strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>
    </section>
    <div class="container fondo_container">
      <div class="row">
              <div class="col-md-5">
                  <h2 class="col" > R<span>EGISTRO DE </span>U<span>SUARIOS</span></h2>
                  <div class="form-row">
              </div>
          </div>
      </div>
    <form method="POST" action="{{URL::to('GestUserIntCrear/guardar')}}"> {{ csrf_field() }}
            <div class="form-row">
              <div class="col-sm-6">
              <label style="color:white" for="">Tipo de Identificaciòn:</label>
                  <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
                  <option value="">--Escoja Tipo de Identificacion--</option>
                      @foreach($TipoIdents as $TipoIdent)
                          <option value="{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}">{{$TipoIdent->	NOMBRE_TIPO_INDENTIFICACION}}</option>
                      @endforeach
                  </select>
                  <span class="text-danger">{{$errors->first("ID_TIPO_INDENTIFICACION")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white">Numero de Documento:</label>
              <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Documento">
              <span class="text-danger">{{$errors->first("NUM_DOCUMENTO")}}</span>
              </div>
            </div>

            <div class="form-row">
              <div class="col-sm-6">
              <label style="color:white">Nombre Completo:</label>
              <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
              <span class="text-danger">{{$errors->first("NOMBRE")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white">Direcciòn de Residencia:</label>
              <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
              <span class="text-danger">{{$errors->first("DIRECCION")}}</span>
              </div>
            </div>
            <div class="form-row">
              <div class="col-sm-6">
              <label style="color:white">Telefono:</label>
              <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
              <span class="text-danger">{{$errors->first("TELEFONO")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white">Pais:</label>
              <input value="COLOMBIA" type="text" name="PAIS" class="form-control" placeholder="Pais">
              <span class="text-danger">{{$errors->first("PAIS")}}</span>
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
              <div class="col-sm-6">
              <label style="color:white">Correo Electronico:</label>
              <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
              <span class="text-danger">{{$errors->first("CORREO")}}</span>
              </div>
            </div>

            <div class="form-row">
              <div class="col-sm-6">
              <label style="color:white">Telefono Oficina:</label>
              <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina">
              <span class="text-danger">{{$errors->first("TELEFONO_OFICINA")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white">Extenciòn:</label>
              <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn">
              <span class="text-danger">{{$errors->first("EXTENSION")}}</span>
              </div>
            </div>

            <div class="form-row">
              <div class="col-sm-6">
              <label style="color:white">Usuario de Registro:</label>
              <input type="email" name="USUARIO" class="form-control" placeholder="Usuario de registro Correo">
              <span class="text-danger">{{$errors->first("USUARIO")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white" for="inputEmail4">Password:</label>
              <input type="password" name="CONTRASENA" class="form-control" placeholder="Escribir Password">
              <span class="text-danger">{{$errors->first("CONTRASENA")}}</span>
              </div>
            </div>

            <div class="form-row">
              <div class="col-sm-6">
              <label style="color:white" for="">Cargo del Funcionario:</label>
                  <select name="ID_CARGO" id="ID_CARGO" class="form-control">
                  <option value="">--Escoja Tipo de Cargo--</option>
                      @foreach($cargos as $cargo)
                          <option value="{{$cargo->NOMBRE_CARGO}}">{{$cargo->NOMBRE_CARGO}}</option>
                      @endforeach
                  </select>
                  <span class="text-danger">{{$errors->first("ID_CARGO")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white" for="">Rol del Funcionario:</label>
                  <select name="ID_ROL" id="ID_ROL" class="form-control">
                  <option value="">--Escoja Tipo de Rol--</option>
                      @foreach($roles as $rol)
                          <option value="{{$rol->id}}">{{$rol->name}}</option>
                      @endforeach
                  </select>
                  <span class="text-danger">{{$errors->first("ID_ROL")}}</span>
              </div>
              <div class="col-sm-6">
              <label style="color:white">Estado:</label>
              <select name="ESTADO"class="form-control">
              <option value="">--Escoja Estado--</option>
                      <option value="ACTIVO">ACTIVO</option>
                      <option value="DESACTIVADO">DESACTIVADO</option>
              </select>
              <span class="text-danger">{{$errors->first("ESTADO")}}</span>
            </div>
            </div>

            <div class="form-group col-sm-6">
              <label style="color:white">Observaciones:</label>
              <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
              <span class="text-danger">{{$errors->first("OBSERVACION")}}</span>


            </div>
            <div class="form-row">
              <div class="form-group">
                  <input type="submit" value="Registrar" class="btn btn-primary">
                  <a class="btn btn-secondary" href="{{URL::to('UsuariosInterno')}}">Regresar</a>
              </div>
            </div>

          </form>

</div>


@endsection
