@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <tbody>
        <tr>
            <td width="33%">
                <strong>Likes & Comentarios</strong>
                <br />
                <div id="chartLikesComments" style="height: 250px"></div>
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered">
    <tbody>
        <tr>
            <td width="100%">
                <strong>Top 7 Post</strong>
                <br />
                @foreach ($usersTOP as $item)
                <br>{{$item['userName']. $item['OriginalPost']}}
                @endforeach
                <div id="chartTOP" width="200" height="200"></div>
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
                    {x: {{$item['likes']}}, y: {{$item['likes']}}},
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
