<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Compras de productos</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar compras</h5>
            <p>
              Admnistrar la compra de productos.
            </p>
            
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Usuario</th>
                  <th class="text-center">Producto</th>
                  <th class="text-center">Cantidad</th>
                  <th class="text-center">Precio de compra</th>
                  <th class="text-center">Total compra</th>
                  <th class="text-center">Fecha</th>
                  <th class="text-center">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                 <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="text-center">
                    <td><?php echo e($item->nombre_usuario); ?></td>
                    <td><?php echo e($item->nombre_producto); ?></td>
                    <td><?php echo e($item->cantidad); ?></td>
                    <td>$<?php echo e($item->precio_compra); ?></td>
                    <td>$<?php echo e($item->precio_compra * $item->cantidad); ?></td>
                    <td><?php echo e($item->created_at); ?></td>
                    <td>
                      <a href="<?php echo e(route('compras.edit', $item->id)); ?>" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <a href="<?php echo e(route('compras.show', $item->id)); ?>" class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
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




<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/compras/index.blade.php ENDPATH**/ ?>