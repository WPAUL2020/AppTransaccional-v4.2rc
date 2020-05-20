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
                        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                            <li>

                                    <a href="{{ url('instahunters') }}">InstaHunters <i class="fas fa-spider"></i></a>
                            </li>
                        <li class="active">

                                    <strong>Vista Previa <i class="fas fa-eye"></i></strong>
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
                        @foreach ($items as $data)
                        <!-- Blog Post -->
                        <div class="blog-post">

                            <div class="post-thumb">

                                <a href="#">
                                    <img src="{{$data->img}}" class="img-rounded" />
                                    <span class="hover-zoom"></span>
                                </a>

                            </div>

                            <div class="post-details">

                                <h3>
                                    <a href="#">Post</a>
                                </h3>

                                <div class="post-meta">

                                    <div class="meta-info">
                                        <i class="entypo-calendar"></i> {{$data->date}}</div>

                                    <div class="meta-info">
                                        <i class="entypo-comment"></i>
                                        {{$data->comentarios}}
                                    </div>

                                    <div class="meta-info">
                                        <i class="far fa-thumbs-up"></i>
                                        {{$data->likes}}
                                    </div>


                                </div>

                                <p>{{$data->txt}}</p>

                            </div>

                        </div>
                        @endforeach


                            <form action="{{URL::to('instahunterview')}}" method="post"> {{ csrf_field() }}
                                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                                    Download Data <i class="fas fa-file-download"></i>
                                 </button>
                            </form>

                        <!-- Blog Pagination -->
                        <div class="text-center">

                            <ul class="pagination">
                                <li class="active">
                                    {{ $items->links() }}
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-sm-4">

                    <!-- List Sidebar -->
    <div class="sidebar">

        <h3>
            <form action="{{URL::to('instahunterview')}}" method="post"> {{ csrf_field() }}
                <button href="#" type="submit" class="btn btn-success btn-lg float-right" name="save">
                    Download Data <i class="fas fa-file-download"></i>
                 </button>
            </form>
        </h3>
        <div class="sidebar-content">
            Elementos listos a descargar
            <ul>
                <li>
                    <a href="#">Total <span>({{$countItem}})</span></a>
                </li>
            </ul>
        </div>
    </div>

    </section>
@endsection
