<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Reportes de productos</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Reportes De Productos</h5>
            <p>
              Tipos de reportes del sistema para productos
            </p>
            <div class="row">
              <div class="col text-end">
                <a href="<?php echo e(route('reportes_productos.falta_stock')); ?>" class="btn btn-primary btn-sm">
                  Productos con cantidad 1 o 0
                </a>
              </div>
            </div>
           <hr>
            <!-- Table with stripped rows -->
            
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-start">Categoria</th>
                  <th class="text-start">Proveedor</th>
                  <th class="text-start">Nombre</th>
                  <th class="text-start">Imagen</th>
                  <th class="text-start">Descripcion</th>
                  <th class="text-start">Cantidad</th>
                  <th class="text-start">Venta</th>
                  <th class="text-start">Compra</th>
                 
                </tr>
              </thead>
              <tbody>
                 <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($item->nombre_categoria); ?> </td>
                    <td><?php echo e($item->nombre_proveedor); ?></td>
                    <td><?php echo e($item->nombre); ?></td>
                    <td>
                      <img src="<?php echo e(asset('storage/' . $item->imagen_producto)); ?>" alt="" width="60px" height="60px">
                    </td>
                    <td><?php echo e($item->descripcion); ?></td>
                    <td class="text-center"><?php echo e($item->cantidad); ?></td>
                    <td class="text-center">$<?php echo e($item->precio_compra); ?></td>
                    <td class="text-center">$<?php echo e($item->precio_venta); ?></td>
                    
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




<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/reportes_productos/index.blade.php ENDPATH**/ ?>