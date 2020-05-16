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
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="Nit">Nit</label>
                            <input name="Nit" type="text" class="form-control" id="Nit" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit">
                            @error('Nit')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="Nit">Nit</label>
                            <input name="Nit" type="text" class="form-control" id="Nit" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit">
                            @error('Nit')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="Nit">Nit</label>
                            <input name="Nit" type="text" class="form-control" id="Nit" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit">
                            @error('Nit')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="Nit">Nit</label>
                            <input name="Nit" type="text" class="form-control" id="Nit" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit">
                            @error('Nit')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

