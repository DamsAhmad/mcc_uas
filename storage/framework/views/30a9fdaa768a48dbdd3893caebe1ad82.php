<div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th><strong>No</strong></th>
                <th><strong>Nama </strong></th>
                <th><strong>Agama</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($data->id); ?></th>
                    <th><?php echo e($data->name); ?></th>
                    <th><?php echo e($data->religion); ?></th>
                    <th></th>
                    <th></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\Kuliah\MCCA\mcca-uas\resources\views/tes.blade.php ENDPATH**/ ?>