<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Consulta de ventas hechas</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Revisar Ventas Existentes</h5>
            
           
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Total Vendido</th>
                  <th class="text-center">Fecha venta</th>
                  <th class="text-center">Usuario</th>
                  <th class="text-center">ver Detalle</th>
                  <th class="text-center">Imprimir Ticket</th>
                  <th class="text-center">Revocar venta</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="text-center">
                    <td class="text-center">$<?php echo e($item->total_venta); ?></td>
                    <td class="text-center"><?php echo e($item->created_at); ?></td>
                    <td class="text-center"><?php echo e($item->nombre_usuario); ?></td>
                    <td class="text-center">
                      <a href="<?php echo e(route('detalle.vista.detalle', $item->id)); ?>" class="btn btn-info">Detalle</a>
                    </td>
                    <td>
                      <a target="_blank" href="<?php echo e(route('detalle.ticket', $item->id)); ?>" class="btn btn-success">Imprimir</a>
                    </td>
                    <td class="text-center">
                      <form action="<?php echo e(route('detalle.revocar', $item->id)); ?>" method="POST" 
                      onsubmit="return confirm('¿¿Esta seguro de revocar la venta??')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger">Revocar</button>
                      </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/detalles_ventas/index.blade.php ENDPATH**/ ?>