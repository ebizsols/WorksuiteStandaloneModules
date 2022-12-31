

<link rel="stylesheet" href="<?php echo e(asset('vendor/css/dropzone.min.css')); ?>">


<div class="row">
    <div class="col-sm-12">
        <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'save-property-form']); ?>
            <div class="add-client bg-white rounded">
                <h4 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
                    <?php echo app('translator')->get('property::app.add'); ?> <?php echo app('translator')->get('property::app.propertyFeatures'); ?></h4>
                <div class="row p-20">
                    <div class="col-lg-12">
                        <div class="row">
                            <input type="hidden" id="hiddenPropertyId">

                            <div class="col-lg-4 col-md-6">
                                <?php if (isset($component)) { $__componentOriginal3985d2df1d9ef7c51070d7c0b8f4b0e4589145ab = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Text::class, ['fieldId' => 'name','fieldLabel' => __('Property::app.name'),'fieldName' => 'feature_name','fieldRequired' => 'true','fieldPlaceholder' => __('placeholders.productName')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Label::class, ['fieldId' => '','fieldLabel' => __('modules.productCategory.productCategory')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select class="form-control select-picker" name="category_id"
                                        id="country_id" data-live-search="true">
                                        <option value="">--</option>
                                        <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>">
                                                <?php echo e(mb_ucwords($category->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8)): ?>
<?php $component = $__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8; ?>
<?php unset($__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8); ?>
<?php endif; ?>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <?php if (isset($component)) { $__componentOriginal373f58fa693eb1202c1acc8658ad45d6306ee2ad = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\Label::class, ['fieldId' => 'statuslabel','fieldLabel' => __('property::app.field_type')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select class="form-control select-picker" name="field_type"
                                        id="product_category_id" >
                                        <option value="Checkbox">Checkbox</option>
                                        <option value="TextArea">TextArea</option>
                                    </select>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8)): ?>
<?php $component = $__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8; ?>
<?php unset($__componentOriginal863bfe686851606453ee7ca47b08abfa2e4810a8); ?>
<?php endif; ?>
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
<?php $component->withAttributes(['id' => 'save-property','class' => 'mr-3']); ?><?php echo app('translator')->get('Property::app.save'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaldffecccc219bb81c1548bfa6ec1531014cb3bec8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonCancel::class, ['link' => route('property.index')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonCancel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-0']); ?><?php echo app('translator')->get('Property::app.cancel'); ?>
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

        // Dropzone.autoDiscover = false;
        // Dropzone class
        // productDropzone = new Dropzone("div#file-upload-dropzone", {
            // dictDefaultMessage: "<?php echo e(__('app.dragDrop')); ?>",
            // url: "<?php echo e(route('product-files.store')); ?>",
            // headers: {
                // 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            // },
            // paramName: "file",
            // maxFilesize: DROPZONE_MAX_FILESIZE,
            // maxFiles: 10,
            // autoProcessQueue: false,
            // uploadMultiple: true,
            // addRemoveLinks: true,
            // parallelUploads: 10,
            // acceptedFiles: 'image/*',
            // init: function() {
                // productDropzone = this;
            // }
        // });
        // productDropzone.on('sending', function(file, xhr, formData) {
            // var productID = $('#hiddenProductId').val();
            // formData.append('product_id', productID);
            // formData.append('default_image', defaultImage);
            // $.easyBlockUI();
        // });
        // productDropzone.on('uploadprogress', function() {
            // $.easyBlockUI();
        // });
        // productDropzone.on('completemultiple', function() {
            // window.location.href = '<?php echo e(route("products.index")); ?>';
        // });
        // productDropzone.on('addedfile', function(file) {
            // lastIndex++;

            // var div = document.createElement('div');
            // div.className = 'form-check-inline custom-control custom-radio mt-2 mr-3';
            // var input = document.createElement('input');
            // input.className = 'custom-control-input';
            // input.type = 'radio';
            // input.name = 'default_image';
            // input.id = 'default-image-'+lastIndex;
            // input.value = file.name;
            // if (lastIndex == 1) {
                // input.checked = true;
            // }
            // div.appendChild(input);

            // var label = document.createElement('label');
            // label.className = 'custom-control-label pt-1 cursor-pointer';
            // label.innerHTML = "<?php echo app('translator')->get('modules.makeDefaultImage'); ?>";
            // label.htmlFor = 'default-image-'+lastIndex;
            // div.appendChild(label);

            // file.previewTemplate.appendChild(div);
        // });


	 $('#save-property').click(function() {
            const url = "<?php echo e(route('property_features.store')); ?>";

            $.easyAjax({
                url: url,
                container: '#save-property-form',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: "#save-property",
                file: true,
                data: $('#save-property-form').serialize(),
                success: function(response) {
                    //if (productDropzone.getQueuedFiles().length > 0) {
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
            });


</script>

<?php /**PATH D:\xampp\htdocs\standalone\Modules\Property\Providers/../Resources/views/settings/propertyFeatures/ajax/create.blade.php ENDPATH**/ ?>