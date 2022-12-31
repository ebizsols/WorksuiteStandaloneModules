<?php $__env->startSection('content'); ?>

    <!-- SETTINGS START -->
    <div class="w-100 d-flex ">

        <?php if (isset($component)) { $__componentOriginalc5c5c2e1f055ee6a6457d15dee2c367a4ad639da = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Property\View\Components\PropertySettingSidebar::class, ['activeMenu' => $activeSettingMenu] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-setting-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Modules\Property\View\Components\PropertySettingSidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc5c5c2e1f055ee6a6457d15dee2c367a4ad639da)): ?>
<?php $component = $__componentOriginalc5c5c2e1f055ee6a6457d15dee2c367a4ad639da; ?>
<?php unset($__componentOriginalc5c5c2e1f055ee6a6457d15dee2c367a4ad639da); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SettingCard::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SettingCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

             <?php $__env->slot('buttons', null, []); ?> 
                <div class="row">
                    <div class="col-md-12 mb-2">

                    </div>
                </div>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('header', null, []); ?> 
                <div class="s-b-n-header" id="tabs">
                    <h2 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
                        <?php echo app('translator')->get($pageTitle); ?></h2>
                </div>
             <?php $__env->endSlot(); ?>

            <!-- LEAVE SETTING START -->
            <div class="col-lg-12 col-md-12 ntfcn-tab-content-left w-100 p-4">

                <div class="col-lg-12 col-md-6">
                    <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Text::class, ['fieldId' => 'name','fieldLabel' => __('property::app.googleApi'),'fieldName' => 'name','fieldRequired' => 'true','fieldPlaceholder' => __('placeholders.productName')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
                    <hr>
                    <h4>App Background Image</h4>
                    <hr>
                </div>


                 <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonPrimary::class, ['icon' => 'check'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3']); ?><?php echo app('translator')->get('app.save'); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                <div class="table-responsive">

                </div>

            </div>
            <!-- LEAVE SETTING END -->

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e)): ?>
<?php $component = $__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e; ?>
<?php unset($__componentOriginalb44089abe45f2c89173e85ef93b9bf2aa54af94e); ?>
<?php endif; ?>

    </div>
    <!-- SETTINGS END -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>


    <script>





    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/settings/generalSettings/index.blade.php ENDPATH**/ ?>