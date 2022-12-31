
    <?php if (isset($component)) { $__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuItem::class, ['icon' => 'display','text' => __('property::app.property'),'link' => route('property.index'),'addon' => App::environment('demo')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
         <?php $__env->endSlot(); ?>
        <div class="accordionItemContent pb-2">
            <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('governorates.index'),'text' => __('property::app.governorates')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('cities.index'),'text' => __('property::app.cities')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('blocks.index'),'text' => __('property::app.blocks')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('property_classifications.index'),'text' => __('property::app.propertyClassifications')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('feature_categories.index'),'text' => __('property::app.featureCategories')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('property_categorization.index'),'text' => __('property::app.propertyCategorization')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('property_classes.index'),'text' => __('property::app.propertyClasses')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('property_types.index'),'text' => __('property::app.propertyTypes')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('weightage_categories.index'),'text' => __('property::app.weightageCategories')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('property_features.index'),'text' => __('property::app.propertyFeatures')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('property_weightages.index'),'text' => __('property::app.propertyWeightages')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('intended_users.index'),'text' => __('property::app.intendedUsers')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('measurement_unit.index'),'text' => __('property::app.measurementUnit')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('methodology_template.index'),'text' => __('property::app.methodologyTemplate')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3)): ?>
<?php $component = $__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3; ?>
<?php unset($__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3); ?>
<?php endif; ?>



<?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>