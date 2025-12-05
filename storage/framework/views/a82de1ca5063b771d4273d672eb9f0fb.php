<?php $__env->startSection('titulo', $titulo); ?>

<?php $__env->startSection('contenido'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Usuario</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nuevo Usuario</h5>
            
            <form action="<?php echo e(route("usuarios.store")); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="name">Nombre del usuario</label>
                <input type="text" class="form-control" required name="name" id="name">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" 
                class="form-control" required>
                <label for="rol">Rol de usuario</label>
                <select name="rol" id="rol" class="form-select">
                  <option value="">Selecciona el rol</option>
                  <option value="admin">Admin</option>
                  <option value="cajero">Cajero</option>
                </select>
                <button class="btn btn-primary mt-3">Guardar</button>
                <a href="<?php echo e(route("usuarios")); ?>" class="btn btn-info mt-3">
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


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/usuarios/create.blade.php ENDPATH**/ ?>