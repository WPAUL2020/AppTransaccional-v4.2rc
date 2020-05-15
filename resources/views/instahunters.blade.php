@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>InstaHunters</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>InstaHunters</strong>
                        </li>
                        </ol>
                </div>
            </div>

        </div>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center display-4"><h1> InstaHunters <i class="fas fa-spider"></i>
                </div>
                <div class="card-header text-center text-primary display-4 ">
                    <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/" class="text-primary"> by Semillero Ing. de Sistemas, Universitaria de Colombia.</a></div>
                <div class="card-body display-4">
                    <form method="POST" action="{{URL::to('instahunters/instahunters')}}" class="form-horizontal"> {{ csrf_field() }}
                         <div class="form-group row card-header text-center display-4">
                            <select name="campoSelect" class="form-control">
                                <option value="">Seleccionar..</option>
                                <option value="usuario">@Usuario</option>
                                <option value="hashtag">#Hashtag</option>
                            </select>
                            @error('campoSelect')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row card-header text-center display-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Ingrese la palabra clave (username o hashtag)" name="palabraClave">
                            @error('palabraClave')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="card-header text-center display-4">
                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="buscar">
                                   Buscar <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <a href="{{URL::to('instahunterview')}}" class="btn btn-info float-right btn-lg">
                                Vista previa <i class="fas fa-eye"></i>
                            </a>
                        </div>
                </div>
            </div>
            <center>
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                  <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Universitaria de Colombia. </a>
                </div>
            </center>
        </div>
    </div>
</div>
<footer>
    @if ($data2view!=null)
        <div>
            {!!$success!!}
        </div>
    @else
    <div>
    </div>
    @endif
</footer>
@endsection

