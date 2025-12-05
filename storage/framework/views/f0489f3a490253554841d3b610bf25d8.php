<?php $__env->startSection('titulo', $titulo ); ?>
<?php $__env->startSection('contenido'); ?>
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <img src="<?php echo e(asset('img/login.jpg')); ?>" alt="" class="img-fluid">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Ingresa tu email y password para acceder</h5>
                    
                  </div>
                  <form class="row g-3 needs-validation" novalidate method="POST" action="<?php echo e(route('logear')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Escribe tu correo</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Escribe tu contraseña!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>
                  <!--Validacion que viene de logear-->
                  <div>
                    <?php if($errors->any()): ?>
                      <p>
                        <ul>
                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Desarrollo por <a target="_blank" href="https://facultadautodidacta/">Facultad Autodidacta</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/auth/login.blade.php ENDPATH**/ ?>