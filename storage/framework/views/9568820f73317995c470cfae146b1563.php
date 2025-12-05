<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Productos</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Productos y stock</h5>
            <p>
              Admnistrar el stock del sistema.
            </p>
            
           
            <!-- Table with stripped rows -->
            <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Crear producto
            </a>
            <hr>
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="text-center">Categoria</th>
                  <th class="text-center">Proveedor</th>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Imagen</th>
                  <th class="text-center">Descripcion</th>
                  <th class="text-center">Cantidad</th>
                  <th class="text-center">Venta</th>
                  <th class="text-center">Compra</th>
                  <th class="text-center">Activo</th>
                  <th class="text-center">Comprar</th>
                  <th class="text-center">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                 <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="text-start">
                    <td><?php echo e($item->nombre_categoria); ?> </td>
                    <td><?php echo e($item->nombre_proveedor); ?></td>
                    <td class="text-center"><?php echo e($item->codigo); ?></td>
                    <td><?php echo e($item->nombre); ?></td>
                    <td>
                      <img src="<?php echo e(asset('storage/' . $item->imagen_producto)); ?>" alt="" width="60px" height="60px">
                      <a href="<?php echo e(route('productos.show.image', $item->imagen_id)); ?>" 
                        class="badge rounded-pill bg-warning text-dark">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                    </td>
                    <td><?php echo e($item->descripcion); ?></td>
                    <td class="text-center"><?php echo e($item->cantidad); ?></td>
                    <td class="text-center">$<?php echo e($item->precio_venta); ?></td>
                    <td class="text-center">$<?php echo e($item->precio_compra); ?></td>
                    <td>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="<?php echo e($item->id); ?>" 
                        <?php echo e($item->activo ? 'checked' : ''); ?>  >
                    </div>
                    </td>
                    <td>
                      <a href="<?php echo e(route('compras.create', $item->id)); ?>" class="btn btn-info">Comprar</a>
                    </td>
                    <td>
                      <a href="<?php echo e(route('productos.edit', $item->id)); ?>" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <a href="<?php echo e(route('productos.show', $item->id)); ?>" class="btn btn-danger">
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

<?php $__env->startPush('scripts'); ?>
  <script>

      function cambiar_estado(id, estado) { 
        $.ajax({
          type: "GET",
          url : "productos/cambiar-estado/" + id + "/" + estado,
          success: function(respuesta){
            if(respuesta == 1){
              Swal.fire({
                title: 'Exito!',
                text: 'Cambio de estado exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'No se llevo a cabo el cambio!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });
      }

    $(document).ready(function(){
      $('.form-check-input').on("change", function(){
        let id = $(this).attr("id");
        let estado = $(this).is(":checked") ? 1 : 0;
        cambiar_estado(id, estado);
      });
    });
  </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/productos/index.blade.php ENDPATH**/ ?>