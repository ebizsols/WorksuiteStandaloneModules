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
                        <?php if (isset($component)) { $__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\LinkPrimary::class, ['link' => route('cities.create'),'icon' => 'plus'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.link-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\LinkPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 openRightModal float-left']); ?>
                        <?php echo app('translator')->get('property::app.add'); ?>
                        <?php echo app('translator')->get('property::app.city'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17)): ?>
<?php $component = $__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17; ?>
<?php unset($__componentOriginal7f662ecf9f97aca611d2405e5e6903e6081fbd17); ?>
<?php endif; ?>
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
            <div class="task-search d-flex  py-1 px-lg-3 px-0 border-right-grey align-items-center">
                <form class="w-100 mr-1 mr-lg-0 mr-md-1 ml-md-1 ml-0 ml-lg-0">
                    <div class="input-group bg-grey rounded">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-0 bg-additional-grey">
                                <i class="fa fa-search f-13 text-dark-grey"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control f-14 p-1 border-additional-grey" id="search-text-field"
                            placeholder="<?php echo app('translator')->get('app.startTyping'); ?>">
                    </div>
                </form>
            </div>
            <div class="col-lg-12 col-md-12 ntfcn-tab-content-left w-100 p-4">
                <?php echo $dataTable->table(['class' => 'table table-hover border-0 w-100']); ?>


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
    <?php echo $__env->make('sections.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>


        $('#property-table').on('preXhr.dt', function(e, settings, data){
            var searchText = $('#search-text-field').val();
            data['searchText'] = searchText;
        });
        const showTable = () => {
            window.LaravelDataTables["property-table"].draw();
        }
          $('#search-text-field').on('change keyup', function() {
           if ($('#search-text-field').val() != "") {
                $('#reset-filters').removeClass('d-none');
                showTable();
            } else {
                $('#reset-filters').addClass('d-none');
                showTable();
            }
        });
           $('#reset-filters').click(function() {
            $('#filter-form')[0].reset();

            $('.select-picker').val('all');
            $('.select-picker').selectpicker("refresh");
            $('#reset-filters').addClass('d-none');

            showTable();
        });

        $('body').on('click', '.productView', function() {
            let id = $(this).data('product-id');

            var url = "<?php echo e(route('property.show', ':id')); ?>";
            url = url.replace(':id', id);

            $(MODAL_DEFAULT + ' ' + MODAL_HEADING).html('...');
            $.ajaxModal(MODAL_DEFAULT, url);
        });
         $('body').on('click', '.delete-table-row', function(){
            var id = $(this).data('product-id');
            Swal.fire({
                title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
                text: "<?php echo app('translator')->get('messages.recoverRecord'); ?>",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "<?php echo app('translator')->get('messages.confirmDelete'); ?>",
                cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
                customClass: {
                    confirmButton: 'btn btn-primary mr-3',
                    cancelButton: 'btn btn-secondary'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "<?php echo e(route('cities.destroy', ':id')); ?>";
                    url = url.replace(':id', id);

                    var token = "<?php echo e(csrf_token()); ?>";

                    $.easyAjax({
                        type: 'POST',
                        url: url,
                        data: {
                            '_token': token,
                            '_method': 'DELETE'
                        },
                        success: function(response) {
                            if (response.status == "success") {
                                showTable();
                            }
                        }
                    });
                }
            });
        });


    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/settings/cities/index.blade.php ENDPATH**/ ?>