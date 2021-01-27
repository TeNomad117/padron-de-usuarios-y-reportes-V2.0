<?php $__env->startSection('contenido'); ?>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
    <h3>Nuevo Contrato</h3>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-7 mt-5">

<!--mensaje flash-->
<?php if(session('contratoGuardado')): ?>
<div class="alert alert-success">
    <?php echo e(session('contratoGuardado')); ?>

</div>
<?php endif; ?>

<!--validacion de errores-->
    <?php if($errors->any()): ?>
   <div class="alert alert-danger">
     <ul>
       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <li><?php echo e($error); ?></li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
   </div>
   <?php endif; ?>

    <div class="card">
    <form method="POST" action="<?php echo e(url('/save')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card-header text-left">Version 2.0</div>
        <font color="red">* Información Requerida</font>
        <div class="card-body">
<div class="card w-10">
<div class="row form-group">
<label for="" class="col-2">Nombre o razon social</label>
<input type="text" name="nombre_razon" class="form-control col-md-9" placeholder="Nombre o razon social..." required>
</div>
</div>

<div  class="row form-group">
    <label for="" class="col-2">Codigo Postal</label>
    <input type="text" name="codigo_postal" class="form-control col-md-9" placeholder="Codigo postal...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Direccion del predio</label>
    <input type="text" name="direccion_predio" class="form-control col-md-9" placeholder="Direccion del predio...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Calles trasversales</label>
    <input type="text" name="calles_trasversales" class="form-control col-md-9" placeholder="Calles transversales...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Colonia</label>
    <input type="text" name="colonia" class="form-control col-md-9" placeholder="Colonia...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Telefono</label>
    <input type="text" name="telefono" class="form-control col-md-9" placeholder="Telefono...">
</div>

<div class="row form-group">
<label for="estado_servicio">Uso del servicio:</label>
            <select name="estado_servicio" id="estado_servicio">
                  <option value="D">Domestico</option>
                  <option value="C">Comercial</option>
                  <option value="Ind" selected>Industrial</option>
                  <option value="P">Publico</option>
            </select>
        </div>

<div class="row form-group">
    <label for="" class="col-2">Ruta</label>
<select name=ruta class="form-control">
    <?php $__currentLoopData = $ruta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($ruta->idruta); ?>"><?php echo e($ruta->calle); ?> <?php echo e($ruta->colonia); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>

<div class="row form-group">
    <label for="" class="col-2">Giro</label>
    <select name=giro class="form-control">
        <?php $__currentLoopData = $giros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($giro->idgiro); ?>"><?php echo e($giro->descripcion); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="row form-group">
    <label for="" class="col-2">Estado del servicio</label>
    <input type="text" name="estado_servicio" class="form-control col-md-9" placeholder="Estado del servicio...">
</div>

<div class="row form-group">
    <label for="" class="col-2">¿Es pensionado?</label>
    <input type="text" name="pensionado" class="form-control col-md-9" placeholder="Es pensionado...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Diametro de la toma</label>
    <input type="text" name="diamtero_toma" class="form-control col-md-9" placeholder="Diametro de la toma...">
</div>

<div class="row form-group">
    <label for="" class="col-2">¿Tiene cisterta?</label>
    <input type="text" name="sisterna" class="form-control col-md-9" placeholder="Tiene cisterna...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Observaciones</label>
    <input type="text" name="observaciones" class="form-control col-md-9" placeholder="Agrege su observacion...">
</div>

<div class="row form-group">
    <label for="" class="col-2">Nota al cobrar</label>
    <input type="text" name="nota_cobrar" class="form-control col-md-9" placeholder="Agrege nota a cobrar...">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="reset" class="btn bt-danger">Cancelar</button>
</div>

    </form>

</div>
</div>
</div>
</div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheNomad\Desktop\V2\reborn\resources\views/contrato/create.blade.php ENDPATH**/ ?>