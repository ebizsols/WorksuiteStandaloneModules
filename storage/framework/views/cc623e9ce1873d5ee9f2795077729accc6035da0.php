<table id="example" <?php echo e($attributes->merge(['class' => 'table'])); ?>>
    <?php if(isset($thead)): ?>
        <thead class="<?php echo e($headType); ?>">
            <tr>
                <?php echo $thead; ?>

            </tr>
        </thead>
    <?php endif; ?>
    <tbody>
        <?php echo e($slot); ?>

    </tbody>
</table>
<?php /**PATH D:\xampp\htdocs\standalone\resources\views/components/table.blade.php ENDPATH**/ ?>