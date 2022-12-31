<?php if(!in_array('client', user_roles()) && user()->permission('view_payroll') != 'none'): ?>
    <?php if (isset($component)) { $__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuItem::class, ['icon' => 'wallet','text' => __('payroll::app.menu.payroll'),'addon' => App::environment('demo')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
         <?php $__env->endSlot(); ?>

        <div class="accordionItemContent pb-2">
            <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('payroll.index'),'text' => __('payroll::app.menu.payroll')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee)): ?>
<?php $component = $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee; ?>
<?php unset($__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee); ?>
<?php endif; ?>
            <?php if(user()->permission('manage_employee_salary') == 'all'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('employee-salary.index'),'text' => __('payroll::app.menu.employeeSalary')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee)): ?>
<?php $component = $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee; ?>
<?php unset($__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3)): ?>
<?php $component = $__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3; ?>
<?php unset($__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3); ?>
<?php endif; ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\standalone\Modules\Payroll\Providers/../Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>