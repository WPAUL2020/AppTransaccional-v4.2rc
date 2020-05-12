<?php $__env->startSection('content'); ?>
<title>Big Data E-Commerce</title>
<a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">MI PERFIL</a>

                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('appl')); ?>">ZONA TRANSACCIONAL</a>
                   <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('home')); ?>">HOME</a>
                   <br>
                   <br>
<div class="container">
    <div class="row">
        <div class="">
            <div class="card">
                <div class="card-header"><center><b>ZONA TRANSACCIONAL</b></center></div>
                </div>
<div class="row">
  <div class="col-sm-4">
  <br>
    <br>
    <div class="card">
    <br>
    <center><img src="<?php echo e(asset('Imagenes/Usuarios2.png')); ?>" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('UsuariosTercero')); ?>">Gestión Usuarios Externos</a></center>
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
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('UsuariosInterno')); ?>">Gestión Usuarios Internos</a></center>
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
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Clientes')); ?>">Gestión Clientes</a></center>
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
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Roles')); ?>">Gestión Rol</a></center>
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
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Cargos')); ?>">Gestión de Cargos</a></center>
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
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('Sector')); ?>">Gestión de Sector Empresa</a></center>
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
      <center><a class="btn btn-primary" href="<?php echo e(URL::to('instahunters')); ?>">Gestión BigData</a></center>
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
      
                <!-- Button trigger modal -->
                <center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Factura
        </button></center>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<form action="<?php echo e(route('generarFactura')); ?>" method="get" id="frm-modal-factura">
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <center><strong><h3 class="modal-title text-muted">Generar factura</h3></strong></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                        <label for=""></label>
                        <strong><small id="helpId" class="text-muted">Nit</small></strong>
                        <input type="text" name="nit" id="nit" class="form-control" data-validate="required" data-message-required="Ingrese el Nit." placeholder="Nit" aria-describedby="helpId">
                        <strong><label for="" class="text-muted">Metodo de pago</label></strong>
                        <select class="form-control" name="mPago" id="mPago" data-validate="required" data-message-required="Seleccione un metodo de pago">
                            <option> Seleccione....</option>
                            <?php $__currentLoopData = $metodoPago; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mPago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($mPago->METODO_PAGO); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for=""></label>
                        <strong><small id="helpId" class="text-muted">Número de documento</small></strong>
                        <input type="text" name="docN" id="docN" class="form-control" data-numeric="true" data-validate="required,number" data-message-required="Ingrese un número de documento" placeholder="No. de documento" aria-describedby="helpId">
                        <strong><label for="" class="text-muted">Servicio</label></strong>
                        <select class="form-control" name="service" id="service" data-validate="required" data-message-required="Seleccione un tipo de servicio">
                            <option> Seleccione....</option>
                            <?php $__currentLoopData = $tipoSevicio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sevicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($sevicio->NOMBRE_PRODUCTO); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for=""></label>
                        <strong><small id="helpId" class="text-muted">Cantidad</small></strong>
                        <input type="text" name="cantidad" id="cantidad" class="form-control" data-numeric="true" data-validate="required,number" data-message-required="Ingrese una cantidad valida" placeholder="Cantidad" aria-describedby="helpId">
                        <label for=""></label>
                        <strong><small id="helpId" class="text-muted">Fecha de envio</small></strong>
                        <input type="text" name="date" id="date" class="form-control" data-mask="date" aria-describedby="helpId" placeholder="DD/MM/YYYY">
                        <label for=""></label>
                        <strong><small id="helpId" class="text-muted">Dirección de envio </small></strong>
                        <input type="text" name="direc" id="direc" class="form-control" aria-describedby="helpId" data-numeric="true" data-validate="required" data-message-required="Ingrese la dirección" placeholder="Cantidad" aria-describedby="helpId" placeholder="Dirección">
                        <input type="hidden" name="" id="" class="form-control" value="Colombia">
                        <strong><label for="" class="text-muted">Ciudad</label></strong>
                        <select class="form-control" name="ciudad" id="ciudad" data-numeric="true" data-validate="required" data-message-required="Seleccion" placeholder="Cantidad" aria-describedby="helpId">
                            <option> Seleccione....</option>
                            <?php $__currentLoopData = $nombreciudad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($ciudad->NOMBRE_CIUDAD); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="form-group">
                            <strong><label for="" class="text-muted">Observaciones (Opcional)</label></strong>
                            <textarea class="form-control" name="obser" id="obser" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="<?php echo e(route('generarFactura')); ?>" onclick="event.preventDefault(); document.getElementById('frm-modal-factura').submit();"> Generar </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

</form>
        <!-- Imported scripts on this page -->
        <script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.validate.min.js')); ?>" defer></script>
		<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery.inputmask.bundle.js')); ?>" defer></script>
		<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-chat.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/appl.blade.php ENDPATH**/ ?>