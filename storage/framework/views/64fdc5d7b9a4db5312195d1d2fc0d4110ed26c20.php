<?php $__env->startSection('contenido'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
          <h2 class="text-center mb-5">Listado de contratos</h2>
<a class="btn btn-success mb-4" href="<?php echo e(url('/form')); ?>">Nuevo contrato</a>

<div class="col-lg-10">
    <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar contrato</button>
      </span>
    </div>
  </div>
</div>

          <table class="table table-bordered table-striped text-center">
            <thead>
                  <tr>
                      <td>Id</td>
                      <th>Nombre</th>
                      <th>Fecha Alta</th>
                      <th>Telefono</th>
                      <td>Acciones</td>
                  </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $contrato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contrato->idnum_contrato); ?></td>
                    <td><?php echo e($contrato->nombre_razon); ?></td>
                    <td><?php echo e($contrato->fecha_alta); ?></td>
                    <td><?php echo e($contrato->telefono); ?></td>
                    <td>

            <form method="post" action="<?php echo e(url('/delete/'.$contrato->idnum_contrato.'/delete')); ?>">
                        <?php echo e(csrf_field()); ?>

            <a href="<?php echo e(url('/editform/'.$contrato->idnum_contrato.'/edit')); ?>" class="btn btn-info">Editar</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

          </table>
          <!--{$contrato->links() }}-->

      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheNomad\Desktop\V2\reborn\resources\views/contrato/index.blade.php ENDPATH**/ ?>