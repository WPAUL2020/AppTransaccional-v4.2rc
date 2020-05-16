<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<div class="wrap">

<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialize()
{
	var mapDiv = document.getElementById('map');
	var map = new google.maps.Map(mapDiv, {
		center: new google.maps.LatLng(48.856614, 2.352222),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	});

	new google.maps.Marker({
		position: new google.maps.LatLng(48.856614, 2.352222),
		map: map
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<section class="contact-map" id="map"></section>


<section class="contact-container">

	<div class="container">

		<div class="row">

			<div class="col-sm-7 sep">

				<h4>Póngase en contacto con nosotros, escríbanos un correo electrónico!</h4>

				<p>
					Si deseas comunicarte con nosotros o que te devolvamos la llamada, <br />
					por favor déjanos tus datos de contacto y alguien del semillero se comunicara contigo; Gracias.
				</p>

				<form class="contact-form" role="form" method="post" action="<?php echo e(URL::to('Mail/store')); ?>" enctype="application/x-www-form-urlencoded"> <?php echo e(csrf_field()); ?>


					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Nombre:" />
					</div>

					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="E-mail:" />
					</div>

					<div class="form-group">
						<textarea class="form-control" name="message" placeholder="Mensaje:" rows="6"></textarea>
					</div>

					<div class="form-group text-right">
						<button class="btn btn-primary" name="send">Enviar</button>
					</div>

				</form>

			</div>

			<div class="col-sm-offset-1 col-sm-4">

				<div class="info-entry">

					<h4>Sede Administrativa:</h4>

					<p>
						Carrera 7 No. 35-85 <br />
						Bogotá, COL <br />

						<br />
						<br />

						<strong>Horario:</strong>
						<br />
						7:30 am – 6:30 pm <br />
						Lunes a Viernes
						<br />
						<br />
					</p>

				</div>

				<div class="info-entry">

					<h4>Contactenos</h4>

					<p>
						Teléfono: +57 (1) 288 – 0871<br />
						Teléfono: +57 (1) 232 – 4070<br />
						inscripciones@universitariadecolombia.edu.co
					</p>

					<ul class="social-networks">
						<li>
							<a href="#">
								<i class="entypo-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="entypo-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="entypo-facebook"></i>
							</a>
						</li>
					</ul>

				</div>

			</div>

		</div>

	</div>

</section>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransacional\AppTransaccional-v4.2rc\resources\views/Contact.blade.php ENDPATH**/ ?>