@extends('layouts.app')
@section('content')
<div style="height: 30px;" class=""></div>
<div class="container page-body boxed-layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
                <center>
                <div class="card-header">
                    <a href="#">
                        <img src="{{ asset('Imagenes/logo.png') }}" width="185" alt="" />
                    </a>
                </div>
                </center>
                @foreach ($response as $respuesta)
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="">{{$respuesta->NOMBRE_PRODUCTO_SERV_T}}</label>
                            <input name="{{$respuesta->NOMBRE_PRODUCTO_SERV_T}}" type="checkbox" class="form-control" id="{{$respuesta->NOMBRE_PRODUCTO_SERV_T}}">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

