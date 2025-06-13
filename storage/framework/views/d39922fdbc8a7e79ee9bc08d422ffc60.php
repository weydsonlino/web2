<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Editar Categoria</h1>

    <form action="<?php echo e(route('categories.update', $category)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name', $category->name)); ?>" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Atualizar
        </button>
        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/silva/Documentos/web2/weydson/atividade_05/resources/views/categories/edit.blade.php ENDPATH**/ ?>