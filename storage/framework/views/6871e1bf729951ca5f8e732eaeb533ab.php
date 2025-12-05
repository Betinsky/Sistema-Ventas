<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar Producto</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Producto</h5>
            
            <form action="<?php echo e(route('productos.update', $item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-select" required>
                    <option value="">Selecciona una categoria</option>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->categoria_id == $categoria->id): ?>
                            <option selected value="<?php echo e($categoria->id); ?>"> <?php echo e($categoria->nombre); ?> </option>
                        <?php else: ?>
                            <option value="<?php echo e($categoria->id); ?>"> <?php echo e($categoria->nombre); ?> </option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <label for="proveedor_id">Proveedor</label>
                <select name="proveedor_id" id="proveedor_id" class="form-select" required>
                    <option value="">Selecciona un proveedor</option>
                    <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->proveedor_id == $proveedor->id): ?>
                            <option selected value="<?php echo e($proveedor->id); ?>"> <?php echo e($proveedor->nombre); ?> </option>
                        <?php else: ?>
                            <option value="<?php echo e($proveedor->id); ?>"> <?php echo e($proveedor->nombre); ?> </option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="codigo">Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo e($item->codigo); ?>">

                <label for="nombre">Nombre del producto</label>
                <input type="text" class="form-control" required name="nombre" id="nombre" value="<?php echo e($item->nombre); ?>">
                
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" 
                cols="20" rows="5" class="form-control"><?php echo e($item->descripcion); ?></textarea>

                <label for="precio_venta">Precio de venta</label>
                <input type="text" id="precio_venta" name="precio_venta" 
                class="form-control" value="<?php echo e($item->precio_venta); ?>" required>

                <button class="btn btn-warning mt-3">Actualizar</button>
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


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/productos/edit.blade.php ENDPATH**/ ?>