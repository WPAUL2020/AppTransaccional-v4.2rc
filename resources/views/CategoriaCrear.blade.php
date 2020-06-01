@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <img src="Imagenes/crearproductos.png">

                                <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro De Categoria</strong>
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
                <h2> <center>REGISTRO DE PRODUCTOS</center></h2>
                 <div class="form-row">
            </div>
            </div>
        </div>
        <form method="POST" action="{{URL::to('CategoriaCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <label>Digitar Producto</label>
                    <input type="text" name="NOMBRE_PRODUCTO_SERV_T" class="form-control" placeholder="NOMBRE DEL PRODUCTO">
                <span class="text-danger">{{$errors->first("NOMBRE_PRODUCTO_SERV_T")}}</span>
            </div>
         
            <div class="col">
                <label>Digitar Detalle del Producto</label>
                    <input type="text" name="DETALLE_PRODUCTO_SERV_T" class="form-control" placeholder="DETALLE DEL PRODUCTO">
                    <span class="text-danger">{{$errors->first("DETALLE_PRODUCTO_SERV_T")}}</span>
            </div>
       
        
                <div class="col">
                    <label for="">Empresa:</label>
                        <select name="ID_EMPRESA_TERCERO" id="ID_EMPRESA_TERCERO" class="form-control be">
                            @foreach($empresa as $empresa)
                        <option value="{{$empresa->ID_EMPRESA_TERCERO}}">{{$empresa->NOMBRE}}</option>
                            @endforeach
                        </select>

                    <span class="text-danger">{{$errors->first("ID_EMPRESA_TERCERO")}}</span>
                
            </div>
        </div>
<br>
                    <div class="form-group ">
                        
                        <input type="submit" value="Registrar" class="btn btn-primary">
                       
                        <a class="btn btn-secondary" href="{{URL::to('Categorias')}}">Regresar</a>
                    </div>
            
        </form>
    </div>
       

</body>
</html>
@endsection
