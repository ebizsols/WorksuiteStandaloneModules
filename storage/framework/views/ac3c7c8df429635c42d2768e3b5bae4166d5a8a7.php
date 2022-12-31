<div <?php echo e($attributes->merge(['class' => 'form-group my-3'])); ?>>
    <?php if (isset($component)) { $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Label::class, ['fieldId' => $fieldId,'fieldLabel' => $fieldLabel,'fieldRequired' => $fieldRequired,'popover' => $popover] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad)): ?>
<?php $component = $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad; ?>
<?php unset($__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad); ?>
<?php endif; ?>

    <textarea class="form-control f-14 pt-2" rows="3" placeholder="<?php echo e($fieldPlaceholder); ?>" name="<?php echo e($fieldName); ?>"
        id="<?php echo e($fieldId); ?>"><?php echo e($fieldValue); ?></textarea>
</div>
<?php /**PATH D:\xampp\htdocs\standalone\resources\views/components/forms/textarea.blade.php ENDPATH**/ ?>