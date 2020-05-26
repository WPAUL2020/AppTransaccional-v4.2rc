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
<table class="table table-bordered">
    <tbody>
        <tr>
            <td width="33%">
                <strong>Likes & Comentarios</strong>
                <br />
                <div id="chartLikesComments" style="height: 250px"></div>
            </td>
            <td width="50%">
                <strong>Top 7</strong>
                <br />
                <div id="chartTOP" style="height: 250px"></div>
            </td>
        </tr>
    </tbody>
</table>
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
				labelColor: '#303641',
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
		}
	});

})(jQuery, window);
</script>
<script src="{{ asset('neonFrontEnd/assets/js/jquery.sparkline.min.js') }}"></script>
@endsection
