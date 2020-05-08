<?php $__env->startSection('content'); ?>
<title>Big Data E-Commerce</title>
<a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">APPL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('home')); ?>">HOME</a>
                   <br>
                   <br>
<div class="container">
    <div class="row">
        <div class="">
            <div class="card">
                <div class="card-header"><center><u><b>ACCESOS PERSONALIZADOS A TU ROL</b></u></center></div>
                </div>
<div class="row">
  <div class="col-sm-4">
  <br>
    <br>
    <div class="card">
    <br>
    <center><img src="<?php echo e(asset('Imagenes/Usuarios2.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('UsuariosTercero')); ?>">Gestiòn Usuarios Externos</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Usuarios.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('UsuariosInterno')); ?>">Gestiòn Usuarios Internos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
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

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Rol.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Roles')); ?>">Gestiòn Rol</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Cargo.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Cargos')); ?>">Gestiòn de Cargos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/SectorEmpresa.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Sector')); ?>">Gestiòn de Sector Empresa</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/BigData.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('instahunters')); ?>">Gestiòn BigData</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/MedioPago.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('MedioPagos')); ?>">Modo de Pago</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Categorias.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Categorias')); ?>">Categorias</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Servicio.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Servicios')); ?>">Servicio</a></center>
      </div>
      </div>
    </div>


  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="<?php echo e(asset('Imagenes/Facturas.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Categorias')); ?>">Factura</a></center>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/appl.blade.php ENDPATH**/ ?>