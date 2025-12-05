<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Categorias</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Categorias</h5>
            <p>
              Admnistrar las categorias de nuestros productos.
            </p>
            <!-- Table with stripped rows -->
            <a href="<?php echo e(route("categorias.create")); ?>" class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Agregar nueva categoria
            </a>
            <hr>
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Nombre Categoria</th>
                  <th class="text-center">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="text-center">
                    <td><?php echo e($item->nombre); ?></td>
                    <td>
                      <a href="<?php echo e(route("categorias.edit", $item->id)); ?>" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <a href="<?php echo e(route("categorias.show", $item->id)); ?>" class="btn btn-danger">
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


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/categorias/index.blade.php ENDPATH**/ ?>