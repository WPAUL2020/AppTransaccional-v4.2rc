<?php $__env->startSection('content'); ?>
<title>Big Data E-Commerce</title>
<a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">APPL</a>
                   <br>
                   <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><u><b>ACCESOS PERSONALIZADOS A TU ROL</b></u></center></div>
                </div>
<div class="row">
  <div class="col-sm-6">
    <br>
    <br>
    <div class="card">
        <br>
    <center><img src="<?php echo e(asset('Imagenes/Usuarios.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
        <center><a class="btn btn-primary" href="<?php echo e(URL::to('GestionUser')); ?>">Gestiòn Usuarios</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <br>
    <br>
    <div class="card">
    <br>
    <center><img src="<?php echo e(asset('Imagenes/Facturas.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a href="#" class="btn btn-primary">Gestiòn Facturas</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Productos.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a href="#" class="btn btn-primary">Gestiòn Productos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Clientes.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Clientes')); ?>">Gestiòn Clientes</a></center>
      </div>
    </div>
  </div>

</div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/williampaulrios/Desktop/ProyectoLaravel/BigDataII/resources/views/appl.blade.php ENDPATH**/ ?>