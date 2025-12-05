<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar proveedor</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nuevo Proveedor</h5>
            
            <form action="<?php echo e(route("proveedores.store")); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="nombre">Nombre de proveedor</label>
                <input type="text" class="form-control" required name="nombre" id="nombre">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" required name="telefono" id="telefono">
                <label for="email">Email</label>
                <input type="email" class="form-control" required name="email" id="email">
                <label for="cp">CP</label>
                <input type="text" class="form-control" required name="cp" id="cp">
                <label for="sitio_web">Sitio Web</label>
                <input type="text" class="form-control" required name="sitio_web" id="sitio_web">
                <label for="notas">Notas</label>
                <textarea name="notas" id="notas" cols="30" rows="10" class="form-control"></textarea>
                <button class="btn btn-primary mt-3">Guardar</button>
                <a href="<?php echo e(route("proveedores")); ?>" class="btn btn-info mt-3">
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


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/proveedores/create.blade.php ENDPATH**/ ?>