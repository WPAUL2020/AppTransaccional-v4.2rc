<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestión Big Data</h1>

                    <ol class=" bc-3" >
                            <li>
                    <a href="<?php echo e(URL::previous()); ?>"> <i class="fas fa-angle-left"></i> Regresar</a>
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
<div class="cir2">
    <strong  class="">Publicaciones</strong>

    <ul class="galeria">
    	<li><a href="#img11"><img src="https://www.youtube.com/watch?v=w1FOFIg1Xnk"></a></li>
    	<li><a href="#img22"><img src=""></a></li>
    	<li><a href="#img33"><img src=""></a></li>
    	<li><a href="#img44"><img src=""></a></li>
    	<li><a href="#img55"><img src=""></a></li>
    	<li><a href="#img66"><img src=""></a></li>
    	<li><a href="#img77"><img src=""></a></li>
    </ul>
    <div class="modal" id="img11">
    	<h4>"Nombre del que la publico1" </h4>
    	<div class="imagen1">
    		<a href="#img44"><</a>
    		<a href="#img22"><img src=""></a>
    		<a href="#img22">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>
 
 	<div class="modal" id="img22">
    	<h4>"Nombre del que la publico2" </h4>
    	<div class="imagen1">
    		<a href="#img11"><</a>
    		<a href="#img33"><img src=""></a>
    		<a href="#img33">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>
 
 	<div class="modal" id="img33">
    	<h4>"Nombre del que la publico3" </h4>
    	<div class="imagen1">
    		<a href="#img22"><</a>
    		<a href="#img44"><img src=""></a>
    		<a href="#img44">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>
 
 	<div class="modal" id="img44">
    	<h4>"Nombre del que la publico4" </h4>
    	<div class="imagen1">
    		<a href="#img33"><</a>
    		<a href="#img55"><img src=""></a>
    		<a href="#img55">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>
 
 	<div class="modal" id="img55">
    	<h4>"Nombre del que la publico5" </h4>
    	<div class="imagen1">
    		<a href="#img44"><</a>
    		<a href="#img66"><img src=""></a>
    		<a href="#img66">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>

 	<div class="modal" id="img66">
    	<h4>"Nombre del que la publico6" </h4>
    	<div class="imagen1">
    		<a href="#img55"><</a>
    		<a href="#img77"><img src=""></a>
    		<a href="#img77">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>
 
 	<div class="modal" id="img77">
    	<h4>"Nombre del que la publico7" </h4>
    	<div class="imagen1">
    		<a href="#img66"><</a>
    		<a href="#img11"><img src=""></a>
    		<a href="#img11">></a>
    	</div>
    	<a class="cerrar" href="">x</a>
    </div>
 </div>
</div>
    <div class="cir">
            <td class="circ" >
                <strong  class="">Likes & Comentarios</strong>
                <br />
                <div class="circ" id="chartLikesComments"></div>
            </td>
       </div>

       <div class="cir1">
            <td class="circ1">
                <strong>Top 7</strong>
                <br />
                <div class="circ1" id="chartTOP">
                </div>
            </td>

    </div>
    <div class="cir1">
        <td class="circ1">
            <strong>Usuarios recurrentes</strong>
            <br />
            <div class="circ1" id="chartUser">
            </div>
        </td>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('Scripts'); ?>
<script src="<?php echo e(asset('neonFrontEnd/assets/js/rickshaw/rickshaw.min.js')); ?>"></script>
<script src="<?php echo e(asset('neonFrontEnd/assets/js/raphael-min.js')); ?>"></script>
<script src="<?php echo e(asset('neonFrontEnd/assets/js/morris.min.js')); ?>"></script>
<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.peity.min.js')); ?>"></script>
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
					{label: "Likes", value: <?php echo e($likesAndComments['likes']); ?>},
					{label: "Comentarios", value: <?php echo e($likesAndComments['comentarios']); ?>},

				],
				labelColor: '#fafafa',
				colors: ['#00a651', '#f26c4f']
			});
			// Bar Charts
			Morris.Bar({
				element: 'chartTOP',
				axes: true,
				data: [
                    <?php $__currentLoopData = $usersTOP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    {x: '<?php echo e($item['userName']); ?>', y: <?php echo e($item['likes']); ?>},
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $chartUserValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    {x: '<?php echo e($user); ?>', y: <?php echo e($value); ?>},
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.sparkline.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\git\AppTransaccional-v4.2rc\resources\views/chartMongoDB.blade.php ENDPATH**/ ?>