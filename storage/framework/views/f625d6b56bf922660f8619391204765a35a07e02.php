<?php $__env->startSection('content'); ?>
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
				labelColor: '#303641',
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
		}
	});

})(jQuery, window);
</script>
<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.sparkline.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/chartMongoDB.blade.php ENDPATH**/ ?>