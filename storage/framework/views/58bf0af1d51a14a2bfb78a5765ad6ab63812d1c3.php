<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<div class="wrap">

	
<section class="contact-map" id="">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.834741073322!2d-74.06627142884011!3d4.623556084072932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMzcnMjMuMiJOIDc0wrAwMyc1OS4xIlc!5e0!3m2!1ses!2sco!4v1591115545896!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>


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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTransaccional-v4.2rc\resources\views/Contact.blade.php ENDPATH**/ ?>