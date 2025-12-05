<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bienvenido, <?php echo e(Auth::user()->name); ?>!</h5>

            <div class="row text-center mb-4">
              <div class="col-md-4 mb-3">
                <div class="bg-primary text-white rounded p-3 shadow-sm">
                  <h6 class="mb-1">Total de ventas</h6>
                  <h4 class="mb-0">$<?php echo e(number_format($totalVentas, 2)); ?></h4>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="bg-success text-white rounded p-3 shadow-sm">
                  <h6 class="mb-1">Cantidad de ventas</h6>
                  <h4 class="mb-0"><?php echo e($cantidadVentas); ?></h4>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="bg-danger text-white rounded p-3 shadow-sm">
                  <h6 class="mb-1">Productos con bajo stock</h6>
                  <h4 class="mb-0"><?php echo e(count($productosBajosStock)); ?></h4>
                </div>
              </div>
            </div>

            <h5 class="mb-3">Últimas Ventas</h5>
            <ul class="list-group">
              <?php $__empty_1 = true; $__currentLoopData = $ventasRecientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Venta #<?php echo e($item->id); ?>

                  <span class="badge bg-secondary">$<?php echo e(number_format($item->total_venta, 2)); ?></span>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="list-group-item text-muted">No hay ventas recientes</li>
              <?php endif; ?>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/dashboard/home.blade.php ENDPATH**/ ?>