<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
<div class="container">
    <div class="row">
            <div class="">
                <h2> REGISTRO DE EMPRESAS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="<?php echo e(URL::to('clientes/guardar')); ?>"> <?php echo e(csrf_field()); ?>

  <div class="form-row">
    <div class="col">
    <label>Tipo de Sector de La compañia:</label>
    <select type="" name="ID_SECTOR_EMPRESA_TERCERO" class="form-control">
                                <option></option>
                                <option>SECTOR ADMINISTRACIÓN Y GESTIÓN</option>
                                <option>SECTOR AGRICULTURA Y GANADERÍA</option>
                                <option>SECTOR INDUSTRIA ALIMENTARIA</option>
                                <option>SECTOR GRANDES ALMACENES</option>
                                <option>SECTOR COMERCIO</option>
                                <option>SECTOR CONSTRUCCIÓN E INDUSTRIAS EXTRACTIVAS</option>
                                <option>SECTOR ACTIVIDADES FÍSICO-DEPORTIVAS</option>
                                <option>SECTOR EDUCACIÓN</option>
                       </select>
    </div>
    <div class="col">
    <label>Nombre Completo de la Compañia:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Direcciòn de la Compañia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    </div>
    <div class="col">
    <label>Telefono de la Compañia</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Pais:</label>
    <input type="text" name="PAIS" class="form-control" placeholder="Pais">
    </div>
    <div class="col">
    <label>Pais:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    </div>

    <div class="col">
    <label>Sitio Web:</label>
    <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>NIT de la compañia:</label>
    <input type="text" name="NIT" class="form-control" placeholder="NIT de la compañia">
    </div>

  <div class="col">
    <label>Usuario:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario Correo">
  </div>

  <div class="col">
    <label>Contraseña:</label>
    <input type="password" name="CONTRASEÑA" class="form-control" placeholder="NIT de la compañia">
  </div>
  </div>

  <div class="form-group">
  <div class="col">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
  </div>
  </div>
  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Clientes')); ?>">Regresar</a>
  </div>
  </div>
</form>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/Clientes.blade.php ENDPATH**/ ?>