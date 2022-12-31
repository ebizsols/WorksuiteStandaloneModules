<?php
$recruitManageSkillPermission = user()->permission('manage_skill');
$recruitViewJobPermission = user()->permission('view_job');
$recruitViewJobApplicationPermission = user()->permission('view_job_application');
$recruitViewInterviewPermission = user()->permission('view_interview_schedule');
$recruitViewOfferLetterPermission = user()->permission('view_offer_letter');
$recruitViewReportPermission = user()->permission('view_report');
?>

<?php if($recruitManageSkillPermission != 'none' ||
    $recruitViewJobPermission != 'none' ||
    $recruitViewJobApplicationPermission != 'none' ||
    $recruitViewInterviewPermission != 'none' ||
    $recruitViewOfferLetterPermission != 'none' ||
    $recruitViewReportPermission != 'none'): ?>


    <?php if (isset($component)) { $__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuItem::class, ['icon' => 'wallet','text' => __('recruit::app.menu.recruit'),'addon' => App::environment('demo')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path
                d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
         <?php $__env->endSlot(); ?>

        <div class="accordionItemContent pb-2">
            <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('recruit-dashboard.index'),'text' => __('recruit::app.menu.dashboard')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitManageSkillPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('job-skills.index'),'text' => __('recruit::app.menu.skills')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitViewJobPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('jobs.index'),'text' => __('recruit::app.menu.job')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitViewJobApplicationPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('job-applications.index'),'text' => __('recruit::app.menu.jobApplication')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitViewInterviewPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('interview-schedule.table_view'),'text' => __('recruit::app.menu.interviewSchedule')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitViewOfferLetterPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('job-offer-letter.index'),'text' => __('recruit::app.menu.offerletter')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitViewJobApplicationPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('candidate-database.index'),'text' => __('recruit::app.menu.candidatedatabase')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <?php if($recruitViewReportPermission != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal99e3f97731351866e87455a31b12b2c5009b2fee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubMenuItem::class, ['link' => route('recruit-job-report.index'),'text' => __('recruit::app.menu.report')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

            <a class="d-block text-lightest f-14" target="_blank" href="<?php echo e(route('recruit')); ?>"><?php echo app('translator')->get('recruit::app.menu.frontWebsite'); ?></a>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3)): ?>
<?php $component = $__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3; ?>
<?php unset($__componentOriginald4a267de86f383005249ca2a9a99cedcc60162e3); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\standalone\Modules/Recruit\Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>