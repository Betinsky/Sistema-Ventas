<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Categoría</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nueva Categoria</h5>
            
            <form action="<?php echo e(route("categorias.store")); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="nombre">Nombre de categoria</label>
                <input type="text" class="form-control" required name="nombre" id="nombre">
                <button class="btn btn-primary mt-3">Guardar</button>
                <a href="<?php echo e(route("categorias")); ?>" class="btn btn-info mt-3">
                    Cancelar
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/categorias/create.blade.php ENDPATH**/ ?>