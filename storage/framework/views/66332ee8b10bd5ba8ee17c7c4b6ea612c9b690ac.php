<!-- SETTINGS BOX START -->
<div class="settings-box bg-additional-grey rounded">

    <?php if(isset($alert)): ?> <?php echo e($alert); ?> <?php endif; ?>
    <?php if(isset($buttons)): ?> <?php echo e($buttons); ?> <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form::class, ['method' => ($method ?? 'PUT')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editSettings','class' => 'ajax-form']); ?>
        <a class="mb-0 d-block d-lg-none text-dark-grey s-b-mob-sidebar" onclick="openSettingsSidebar()"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="s-b-inner s-b-notifications bg-white b-shadow-4 rounded">
            <?php echo e($header); ?>

            <div class="s-b-n-content">
                <div class="tab-content" id="nav-tabContent">
                    <!--  TAB CONTENT START -->
                    <div class="tab-pane fade show active" id="nav-email" role="tabpanel"
                        aria-labelledby="nav-email-tab">
                        <div class="d-flex flex-wrap justify-content-between">
                            <?php echo e($slot); ?>

                        </div>
                        <?php if(isset($action)): ?> <?php echo e($action); ?> <?php endif; ?>
                    </div>
                    <!-- TAB CONTENT END -->
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>
</div>
<!-- SETTINGS BOX END -->
<?php /**PATH D:\xampp\htdocs\standalone\resources\views/components/setting-card.blade.php ENDPATH**/ ?>