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

        <?php $__currentLoopData = $usersTOP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    	<li><a href="<?php echo e($data['OriginalPost']); ?>"><img src="<?php echo e($data['img']); ?>" class="img-rounded"/></a> <h4><?php echo e($data['userName']); ?></h4> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
     </div>
    <div class="cir5">
        <td class="circ1">
                <br />
                <div class="circ1" id="chartTOP">
                </div>
            </td>

    </div>
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
				colors: ['#00a651', '#f26c4f'],
                resize: true
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
				barColors: ['#00a651'],
                resize: true
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
				barColors: ['#00a651'],
                resize: true
			});
		}
	});

})(jQuery, window);
</script>
<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.sparkline.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/chartMongoDB.blade.php ENDPATH**/ ?>