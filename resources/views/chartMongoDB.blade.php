@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestión Big Data</h1>

                    <ol class=" bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestión Big Data/ Estadistica</strong>
                        </li>
                        </ol>

                </div>
            </div>
        </div>
    </section>
<div>
    <div class="cir1">
        <div>
            <td class="circ" >
                <br />
                <div class="circ" id="chartLikesComments"></div>
            </td>
             <div  class="lll">
             <h3 class="tit">Datos Recolectados</h3>
             <h4 class="tit2">en la búsqueda</h4>
             </div>
             </div>
             <div class="cir4">
             <td class="circ1">
            <br />
            <div class="circ1" id="chartUser">
            </div>
        </td>
            </div>
    </div>   

    <div class="cir2">
        <h2 class="tit1">Top 8 a Nivel de Instagram</h2>
    <div class="circ3">
    <ul class="galeria">
       
        @foreach ($usersTOP as $data)
            <li><a href="{{$data['OriginalPost']}}"><img src="{{$data['img']}}"></a></li>
        @endforeach
    {{--
    	<li><a href="#img11"><img src=""></a></li>
    	<li><a href="#img22"><img src=""></a></li>
    	<li><a href="#img33"><img src=""></a></li>
    	<li><a href="#img44"><img src=""></a></li>
    	<li><a href="#img55"><img src=""></a></li>
    	<li><a href="#img66"><img src=""></a></li>
    	<li><a href="#img77"><img src=""></a></li> --}}
       
    </ul>
     </div>  
    <div class="cir4">
        <td class="circ1">
                <br />
                <div class="circ1" id="chartTOP">
                </div>
            </td>
       
    </div>
    </div>
</div>
@endsection
@section('Scripts')
<script src="{{ asset('neonFrontEnd/assets/js/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('neonFrontEnd/assets/js/raphael-min.js') }}"></script>
<script src="{{ asset('neonFrontEnd/assets/js/morris.min.js') }}"></script>
<script src="{{ asset('neonFrontEnd/assets/js/jquery.peity.min.js') }}"></script>
<script type="text/javascript">
;(function($, window, undefined)
{
	"use strict";

	$(document).ready(function()
	{
		// Morris.js Graphs
		if(typeof Morris != 'undefined')
		{


			// Donut Colors
			Morris.Donut({
				element: 'chartLikesComments',
				data: [
					{label: "Likes", value: {{$likesAndComments['likes']}}},
					{label: "Comentarios", value: {{$likesAndComments['comentarios']}}},

				],
				labelColor: '#fafafa',
				colors: ['#00a651', '#f26c4f']
			});
			// Bar Charts
			Morris.Bar({
				element: 'chartTOP',
				axes: true,
				data: [
                    @foreach ($usersTOP as $item)
                    {x: '{{$item['userName']}}', y: {{$item['likes']}}},
                    @endforeach
				],
				xkey: 'x',
				ykeys: ['y'],
				labels: ['Likes'],
				barColors: ['#00a651']
			});

			Morris.Bar({
				element: 'chartUser',
				axes: true,
				data: [
                    @foreach ($chartUserValues as $user => $value)
                    {x: '{{$user}}', y: {{$value}}},
                    @endforeach
				],
				xkey: 'x',
				ykeys: ['y'],
				labels: ['Publicaciones'],
				barColors: ['#00a651']
			});
		}
	});

})(jQuery, window);
</script>
<script src="{{ asset('neonFrontEnd/assets/js/jquery.sparkline.min.js') }}"></script>
@endsection
