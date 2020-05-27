@extends('layouts.app')
@section('content')
        <!-- Breadcrumb -->
        <section class="breadcrumb">

            <div class="container">

                <div class="row">

                    <div class="col-sm-9">

                        <h1>Vista Previa</h1>

                                    <ol class="bc-3" >
                                <li>
                        <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                    </li>
                            <li>

                                    <a href="{{ url('instahunters') }}">InstaHunters <i class="fas fa-spider"></i></a>
                            </li>
                        <li class="active">
                            <a href="{{ url('instahuntersvista  ') }}"> Busquedas Realizadas <i class="fas fa-eye"></i></strong></a>
                            </li>
                            </ol>

                    </div>

                </div>

            </div>
        </section>
    <!-- Blog -->
    <section class="blog">

        <div class="container">

            <div class="row">

                <div class="col-sm-8">

                    <div class="blog-posts">
                        @foreach ($data as $datos)
                        <!-- Blog Post -->
                        <div class="blog-post">

                            <div class="post-thumb">

                                <a href="https://{{$datos['originalPost']}}">
                                    <img src="{{$datos['img']}}" class="img-rounded" />
                                    <span class="hover-zoom"></span>
                                </a>

                            </div>

                            <div class="post-details">

                                <h3>
                                    <a href="https://{{$datos['originalPost']}}">Post Original</a>
                                </h3>

                                <div class="post-meta">

                                    <div class="meta-info">
                                        <i class="entypo-calendar"></i> {{$datos['time']}}</div>

                                    <div class="meta-info">
                                        <i class="entypo-comment"></i>
                                        {{$datos['comentarios']}}
                                    </div>

                                    <div class="meta-info">
                                        <i class="far fa-thumbs-up"></i>
                                        {{$datos['likes']}}
                                    </div>


                                </div>

                                <p>{{$datos['txt']}}</p>

                            </div>

                        </div>
                        @endforeach


                            <form action="{{ URL:: to("instahunterview/download/$id") }}" method="POST"> {{ csrf_field() }}

                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                                    Download Data <i class="fas fa-file-download"></i>
                                 </button>
                            </form>

                        <!-- Blog Pagination -->
                        <div class="text-center">

                            <ul class="pagination">
                                <li class="active">
                                    {{ $data->links() }}
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-sm-4">

                    <!-- List Sidebar -->
    <div class="sidebar">

        <h3>
            <form action="{{ URL:: to("instahunterview/download/$id") }}" method="POST"> {{ csrf_field() }}
                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                    Download Data <i class="fas fa-file-download"></i>
                 </button>
            </form>
        </h3>
        <div class="sidebar-content">
            Elementos listos a descargar
            <ul>
                <li>
                    {{-- <a href="#">Total <span>({{$countItem}})</span></a> --}}
                </li>
            </ul>
        </div>
    </div>

    </section>
@endsection
