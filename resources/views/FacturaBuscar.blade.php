@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>GENERAR FACTURA</center></h2>
                <form method="POST" action="{{URL::to('')}}" class="form-horizontal"> {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                     <label for="">Tipo de Identificaciòn:</label>
                     <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
                    <option value="">--Escoja Tipo de Identificacion--</option>
                        @foreach($TipoIdents as $TipoIdent)
                    <option value="{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}">{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}</option>
                        @endforeach
                     </select>
                </div>
                <div class="form-group">
                    <label>Numero de Identificaciòn:</label>
                    <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Identificaciòn">
                     </div>
                <div class="form-group">
                        <input type="submit" value="Generar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
