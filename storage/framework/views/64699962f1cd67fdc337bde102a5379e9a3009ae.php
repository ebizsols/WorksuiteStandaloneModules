<?php if(!in_array('client', user_roles()) && (user()->permission('manage_salary_payment_method') == 'all' || user()->permission('manage_salary_component') == 'all' || user()->permission('manage_salary_group') == 'all' || user()->permission('manage_salary_tds') == 'all')): ?>
    <?php if (isset($component)) { $__componentOriginalcd728ade001f05c9f58f8d190a481136e39bd167 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SettingMenuItem::class, ['active' => $activeMenu,'menu' => 'payroll_settings','href' => route('property.index'),'text' => __('property::app.propertySettings')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SettingMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd728ade001f05c9f58f8d190a481136e39bd167)): ?>
<?php $component = $__componentOriginalcd728ade001f05c9f58f8d190a481136e39bd167; ?>
<?php unset($__componentOriginalcd728ade001f05c9f58f8d190a481136e39bd167); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/sections/setting-sidebar.blade.php ENDPATH**/ ?>