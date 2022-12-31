<?php
$addProductCategoryPermission = user()->permission('manage_product_category');
$addProductSubCategoryPermission = user()->permission('manage_product_sub_category');
?>

<link rel="stylesheet" href="<?php echo e(asset('vendor/css/dropzone.min.css')); ?>">

<div class="row">
    <div class="col-sm-12">
        <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form::class, ['method' => 'PUT'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'save-product-data-form']); ?>
            <div class="add-client bg-white rounded">
                <h4 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
                    <?php echo app('translator')->get('app.edit'); ?> <?php echo app('translator')->get('property::app.propertyClassifications'); ?> </h4>
                <div class="row p-20">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-md-4">
                                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Text::class, ['fieldId' => 'name','fieldLabel' => __('app.name'),'fieldName' => 'title','fieldRequired' => 'true','fieldPlaceholder' => __('placeholders.productName'),'fieldValue' => $product->title] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab)): ?>
<?php $component = $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab; ?>
<?php unset($__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab); ?>
<?php endif; ?>
                            </div>



                            <div class="col-lg-4 col-md-6">
                                <?php if (isset($component)) { $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Label::class, ['fieldId' => 'statuslabel','fieldLabel' => __('property::app.status')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'my-3']); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad)): ?>
<?php $component = $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad; ?>
<?php unset($__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\InputGroup::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\InputGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <select class="form-control select-picker" name="status"
                                        id="product_category_id" >
                                        <option value="Active"<?php if($product->status =='Active'): ?> selected <?php endif; ?>>Active</option>
                                        <option value="Inactive"<?php if($product->status =='Inactive'): ?> selected <?php endif; ?>>Inactive</option>
                                    </select>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8)): ?>
<?php $component = $__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8; ?>
<?php unset($__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8); ?>
<?php endif; ?>
                            </div>



                        </div>
                    </div>

                </div>



                <?php if (isset($component)) { $__componentOriginalfc2695d0fb2b25f1a4057d7bc43eb62e95aaec66 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormActions::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FormActions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonPrimary::class, ['icon' => 'check'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'save-product-form','class' => 'mr-3']); ?><?php echo app('translator')->get('app.save'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonCancel::class, ['link' => route('property_classifications.index')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonCancel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-0']); ?><?php echo app('translator')->get('app.cancel'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8)): ?>
<?php $component = $__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8; ?>
<?php unset($__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc2695d0fb2b25f1a4057d7bc43eb62e95aaec66)): ?>
<?php $component = $__componentOriginalfc2695d0fb2b25f1a4057d7bc43eb62e95aaec66; ?>
<?php unset($__componentOriginalfc2695d0fb2b25f1a4057d7bc43eb62e95aaec66); ?>
<?php endif; ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>

    </div>
</div>

<script>
    $(document).ready(function() {

        var defaultImage = '';
        var lastIndex = 0;
        // var mockFile = <?php echo $images; ?>;

        // Dropzone.autoDiscover = false;
        // //Dropzone class
        // productDropzone = new Dropzone("div#file-upload-dropzone", {
        //     dictDefaultMessage: "<?php echo e(__('app.dragDrop')); ?>",
        //     url: "<?php echo e(route('product-files.update_images')); ?>",
        //     headers: {
        //         'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        //     },
        //     paramName: "file",
        //     maxFilesize: DROPZONE_MAX_FILESIZE,
        //     maxFiles: 10,
        //     autoProcessQueue: false,
        //     uploadMultiple: true,
        //     addRemoveLinks: true,
        //     parallelUploads: 10,
        //     acceptedFiles: 'image/*',
        //     init: function() {
        //         productDropzone = this;
        //     },
        //     removedfile: function (file) {
        //         var index = mockFile.findIndex(x => x.name == file.name);
        //         mockFile.splice(index, 1);

        //         if(typeof(file.id) != 'undefined') {
        //             Swal.fire({
        //                 title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
        //                 text: "<?php echo app('translator')->get('messages.recoverRecord'); ?>",
        //                 icon: 'warning',
        //                 showCancelButton: true,
        //                 focusConfirm: false,
        //                 confirmButtonText: "<?php echo app('translator')->get('messages.confirmDelete'); ?>",
        //                 cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
        //                 customClass: {
        //                     confirmButton: 'btn btn-primary mr-3',
        //                     cancelButton: 'btn btn-secondary'
        //                 },
        //                 showClass: {
        //                     popup: 'swal2-noanimation',
        //                     backdrop: 'swal2-noanimation'
        //                 },
        //                 buttonsStyling: false
        //             }).then((result) => {
        //                 if (result.isConfirmed) {
        //                     var token = "<?php echo e(csrf_token()); ?>";

        //                     var url = "<?php echo e(route('product-files.destroy', ':id')); ?>";
        //                     url = url.replace(':id', file.id);

        //                     $.easyAjax({
        //                         type: 'POST',
        //                         url: url,
        //                         data: {
        //                             '_token': token,
        //                             '_method': 'DELETE'
        //                         },
        //                         success: function(response) {
        //                             //This will manually removed the file
        //                             file.previewElement.remove();

        //                             if ('<?php echo e($product->default_image); ?>' == file.hashname) {
        //                                 let $radio = $('.custom-control-input');
        //                                 $radio[1].checked = true;
        //                             }
        //                         }
        //                     });
        //                 }
        //             });

        //             return false;
        //         }

        //         //This will manually removed the file
        //         file.previewElement.remove();
        //     }
        // });

        // productDropzone.on('sending', function(file, xhr, formData) {
        //     var productID = '<?php echo e($product->id); ?>';
        //     formData.append('product_id', productID);
        //     formData.append('default_image', defaultImage);

        //     if (mockFile.length > 0) {
        //         formData.append('uploaded_files', JSON.stringify(mockFile));
        //     }

        //     $.easyBlockUI();
        // });

        // productDropzone.on('uploadprogress', function() {
        //     $.easyBlockUI();
        // });

        // productDropzone.on('completemultiple', function() {
        //     window.location.href = '<?php echo e(route("products.index")); ?>';
        // });

        // productDropzone.on('addedfile', function(file) {
        //     lastIndex++;
        //     console.log(file.name);

        //     var div = document.createElement('div');
        //     div.className = 'form-check-inline custom-control custom-radio mt-2';

        //     var input = document.createElement('input');
        //     input.className = 'custom-control-input';
        //     input.type = 'radio';
        //     input.name = 'default_image';
        //     input.id = 'default-image-'+lastIndex;
        //     input.value = file.hashname != undefined ? file.hashname : file.name;
        //     if (lastIndex == 1) {
        //         input.checked = true;
        //     }
        //     if ('<?php echo e($product->default_image); ?>' == file.hashname) {
        //         input.checked = true;
        //     }
        //     div.appendChild(input);

        //     var label = document.createElement('label');
        //     label.className = 'custom-control-label pt-1 cursor-pointer';
        //     label.innerHTML = "<?php echo app('translator')->get('modules.makeDefaultImage'); ?>";
        //     label.htmlFor = 'default-image-'+lastIndex;
        //     div.appendChild(label);

        //     file.previewTemplate.appendChild(div);
        // });

        // // Create the mock file:
        // mockFile.forEach(file => {
        //     var path = "<?php echo e(asset_url('products/' . '/:file_name')); ?>";
        //     path = path.replace(':file_name', file.hashname);

        //     productDropzone.emit('addedfile', file);
        //     productDropzone.emit('thumbnail', file, path);
        //     productDropzone.files.push(file);
        //     productDropzone.emit("complete", file);
        // });

        // productDropzone.options.maxFiles = productDropzone.options.maxFiles - mockFile.length;

        // productDropzone.on("maxfilesexceeded", function(file) { this.removeFile(file); });

        $('#save-product-form').click(function() {
            const url = "<?php echo e(route('property_classifications.update', [$product->id])); ?>";

            $.easyAjax({
                url: url,
                container: '#save-product-data-form',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: "#save-product-form",
                file: true,
                data: $('#save-product-data-form').serialize(),
                success: function(response) {
                    if (false) {
                        propertyID = response.propertyID
                        defaultImage = response.defaultImage;
                        $('#hiddenPropertyId').val(propertyID);
                        productDropzone.processQueue();
                    }
                    else{
                        if ($(MODAL_XL).hasClass('show')) {
                            $(MODAL_XL).hide();
                            window.location.reload();
                        } else {
                            window.location.href = response.redirectUrl;
                        }
                    }
                }
            });
        });

        // $('#product_category_id').change(function(e) {
        //     let categoryId = $(this).val();

        //     var url = "<?php echo e(route('get_product_sub_categories', ':id')); ?>";
        //     url = url.replace(':id', categoryId);

        //     $.easyAjax({
        //         url: url,
        //         type: "GET",
        //         success: function(response) {
        //             if (response.status == 'success') {
        //                 var options = [];
        //                 var rData = [];
        //                 rData = response.data;
        //                 $.each(rData, function(index, value) {
        //                     var selectData = '';
        //                     selectData = '<option value="' + value.id + '">' + value
        //                         .category_name + '</option>';
        //                     options.push(selectData);
        //                 });

        //                 $('#sub_category_id').html('<option value="">--</option>' + options);
        //                 $('#sub_category_id').selectpicker('refresh');
        //             }
        //         }
        //     })
        // });

        // $('#add-category').click(function() {
        //     const url = "<?php echo e(route('productCategory.create')); ?>";
        //     $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        //     $.ajaxModal(MODAL_LG, url);
        // })

        // $('#add-sub-category').click(function() {
        //     const url = "<?php echo e(route('productSubCategory.create')); ?>";
        //     $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        //     $.ajaxModal(MODAL_LG, url);
        // });

        // $('#add-tax').click(function() {
        //     const url = "<?php echo e(route('taxes.create')); ?>";
        //     $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        //     $.ajaxModal(MODAL_LG, url);
        // });

        // init(RIGHT_MODAL);

        // $('#downloadable').change(function() {
        //     if ($(this).is(':checked')) {
        //         $('.downloadable').removeClass('d-none');
        //     } else {
        //         $('.downloadable').addClass('d-none');
        //     }
        // });
    });
</script>
<?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/settings/propertyClassifications/ajax/edit.blade.php ENDPATH**/ ?>