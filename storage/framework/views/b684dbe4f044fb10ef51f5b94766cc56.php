<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Hacer una compra</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Compra nueva de : <?php echo e($item->nombre); ?></h5>
            
            <form action="<?php echo e(route('compras.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" value="<?php echo e($item->id); ?>" id="id" name="id" hidden>
                <label for="cantidad">Cantidad del producto</label>
                <input type="text" class="form-control" required name="cantidad" id="cantidad">
                <label for="precio_compra">Precio de compra</label>
                <input type="text" id="precio_compra" name="precio_compra" class="form-control" required>
                <button class="btn btn-primary mt-3">Comprar</button>
                <a href="<?php echo e(route("productos")); ?>" class="btn btn-info mt-3">
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


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/compras/create.blade.php ENDPATH**/ ?>