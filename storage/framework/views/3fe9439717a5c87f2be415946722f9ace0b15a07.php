
<!-- SETTINGS SIDEBAR START -->
<div class="mobile-close-overlay w-100 h-100" id="close-settings-overlay"></div>
<div class="settings-sidebar bg-white py-3" id="mob-settings-sidebar">
    <a class="d-block d-lg-none close-it" id="close-settings"><i class="fa fa-times"></i></a>

    <!-- SETTINGS SEARCH START -->
    <form class="border-bottom-grey px-4 pb-3 d-flex">
        <div class="input-group rounded py-1 border-grey">
            <div class="input-group-prepend">
                <span class="input-group-text border-0 bg-white">
                    <i class="fa fa-search f-12 text-lightest"></i>
                </span>
            </div>
            <input type="text" id="search-setting-menu" class="form-control border-0 f-14 pl-0"
                placeholder="<?php echo app('translator')->get('app.search'); ?>">
        </div>
    </form>
    <!-- SETTINGS SEARCH END -->

    <!-- SETTINGS MENU START -->
    <ul class="settings-menu" id="settingsMenu">
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'country_settings','href' => route('property.index'),'text' => __('property::app.countries')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'cities_settings','href' => route('cities.index'),'text' => __('property::app.cities')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'blocks_settings','href' => route('blocks.index'),'text' => __('property::app.blocks')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'governorates_settings','href' => route('governorates.index'),'text' => __('property::app.governorates')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_classes_settings','href' => route('property_classes.index'),'text' => __('property::app.propertyClasses')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_types_settings','href' => route('property_types.index'),'text' => __('property::app.propertyTypes')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_classifications_settings','href' => route('property_classifications.index'),'text' => __('property::app.propertyClassifications')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_categorization_settings','href' => route('property_categorization.index'),'text' => __('property::app.propertyCategorization')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'weightage_categories_settings','href' => route('weightage_categories.index'),'text' => __('property::app.weightageCategories')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_weightages_settings','href' => route('property_weightages.index'),'text' => __('property::app.propertyWeightages')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'feature_categories_settings','href' => route('feature_categories.index'),'text' => __('property::app.featureCategories')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_features_settings','href' => route('property_features.index'),'text' => __('property::app.propertyFeatures')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'intended_users_settings','href' => route('intended_users.index'),'text' => __('property::app.intendedUsers')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'measurement_unit_settings','href' => route('measurement_unit.index'),'text' => __('property::app.measurementUnit')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'methodology_template_settings','href' => route('methodology_template.index'),'text' => __('property::app.methodologyTemplate')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'report_conditional_text_settings','href' => route('report_conditional_text.index'),'text' => __('property::app.reportConditionalText')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'conditional_rule_text_settings','href' => route('conditional_rule_text.index'),'text' => __('property::app.conditionalRuleText')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'property_menu_settings','href' => route('property_menu.index'),'text' => __('property::app.menu')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebarItem::class, ['active' => $activeMenu,'menu' => 'general_settings','href' => route('general_settings.index'),'text' => __('property::app.generalSettings')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4)): ?>
<?php $component = $__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4; ?>
<?php unset($__componentOriginal65900b605c4bfcc23b360c31bfcad197669eb8f4); ?>
<?php endif; ?>

    </ul>

    <!-- SETTINGS MENU END -->

</div>
<!-- SETTINGS SIDEBAR END -->

<script>
    $("body").on("click", ".ajax-tab", function(event) {
        event.preventDefault();

        $('.project-menu .p-sub-menu').removeClass('active');
        $(this).addClass('active');

        const requestUrl = this.href;

        $.easyAjax({
            url: requestUrl,
            blockUI: true,
            container: ".content-wrapper",
            historyPush: true,
            success: function(response) {
                if (response.status === "success") {
                    $('.content-wrapper').html(response.html);
                    init('.content-wrapper');
                }
            }
        });
    });

    $("#search-setting-menu").on("keyup", function() {
        var value = this.value.toLowerCase().trim();
        $("#settingsMenu li").show().filter(function() {
            return $(this).text().toLowerCase().trim().indexOf(value) == -1;
        }).hide();
    });

    document.querySelector('#settingsMenu .active').scrollIntoView()

</script>
<?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/components/property-setting-sidebar.blade.php ENDPATH**/ ?>