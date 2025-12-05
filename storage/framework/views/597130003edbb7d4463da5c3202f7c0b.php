<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar imagen de Producto</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar imagen de producto del stock</h5>
            

            <hr>
            <form action="<?php echo e(route('productos.update.image', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label for="imagen">Selecciona la nueva imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
                <hr>
                <button class="btn btn-warning">Actualizar imagen</button>
                <a href="<?php echo e(route('productos')); ?>" class="btn btn-info">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/productos/show-image.blade.php ENDPATH**/ ?>