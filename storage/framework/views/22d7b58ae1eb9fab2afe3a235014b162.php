<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Proveedores</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Proveedores</h5>
            <p>
              Admnistrar los proveedores de nuestros productos.
            </p>
            <!-- Table with stripped rows -->
            <a href="<?php echo e(route('proveedores.create')); ?>" class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Agregar nuevo proveedor
            </a>
            <hr>
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Telefono</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">CP</th>
                  <th class="text-center">Sitio web</th>
                  <th class="text-center">Nota</th>
                  <th class="text-center">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="text-center">
                    <td><?php echo e($item->nombre); ?></td>
                    <td><?php echo e($item->telefono); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->cp); ?></td>
                    <td><?php echo e($item->sitio_web); ?></td>
                    <td><?php echo e($item->notas); ?></td>
                    <td>
                      <a href="<?php echo e(route("proveedores.edit", $item->id)); ?>" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <a href="<?php echo e(route("proveedores.show", $item->id)); ?>" class="btn btn-danger">
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


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/proveedores/index.blade.php ENDPATH**/ ?>