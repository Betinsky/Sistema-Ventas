<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="text-center">
    <td><?php echo e($item->email); ?></td>
    <td><?php echo e($item->name); ?></td>
    <td><?php echo e($item->rol); ?></td>
    <td>
        <a href="#" onclick="agregar_id_usuario(<?php echo e($item->id); ?>)" 
            class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cambiar_password">
            <i class="fa-solid fa-user-lock"></i>
        </a>
    </td>
    <td class="text-center">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="<?php echo e($item->id); ?>" 
            <?php echo e($item->activo ? 'checked' : ''); ?>  >
        </div>
    </td>
    <td>
        <a href="<?php echo e(route("usuarios.edit", $item->id)); ?>" class="btn btn-warning">
        <i class="fa-solid fa-user-pen"></i>
        </a>
        
    </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Sistema_ventas\resources\views/modules/usuarios/tbody.blade.php ENDPATH**/ ?>