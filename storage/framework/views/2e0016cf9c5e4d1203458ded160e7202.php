<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $__env->yieldContent('titulo'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.bootstrap5.css">
  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('NiceAdmin/assets/css/style.css')); ?>" rel="stylesheet">

  <!--Iconos con fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php echo $__env->make('shared.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php echo $__env->make('shared.aside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- End Sidebar-->

  <?php echo $__env->yieldContent('contenido'); ?>

  <!-- ======= Footer ======= -->
  <?php echo $__env->make('shared.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/assets/vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/assets/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Niceadmin/assets/vendor/quill/quill.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  
  <!--Datatble -->
  
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.bootstrap5.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.print.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('NiceAdmin/assets/js/main.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>

    $('.datatable').DataTable({
        layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }
        },
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        }
        
    });

    <?php if(session('success')): ?>
      Swal.fire({
        title: 'Exito!',
        text: '<?php echo e(session('success')); ?>',
        icon: 'success',
        confirmButtonText:'Aceptar'
      });
    <?php endif; ?>

    <?php if(session('error')): ?>
      Swal.fire({
        title: 'Error!',
        text: '<?php echo e(session('success')); ?>',
        icon: 'error',
        confirmButtonText:'Aceptar'
      });
    <?php endif; ?>
  </script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/layouts/main.blade.php ENDPATH**/ ?>