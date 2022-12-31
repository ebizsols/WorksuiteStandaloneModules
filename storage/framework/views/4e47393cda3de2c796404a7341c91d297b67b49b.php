<link rel="stylesheet" href="<?php echo e(asset('vendor/css/dropzone.min.css')); ?>">

<?php $__env->startPush('styles'); ?>
    <style>
        .message-action {
            visibility: hidden;
        }
        .message_wrapper .msg-content-right .chat-box .card:hover .message-action {
            visibility: visible;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!-- MESSAGE START -->
    <div class="message_wrapper bg-white border-top-0">
        <!-- MESSAGE HEADER START -->

        <!-- MESSAGE HEADER END -->
        <!-- MESSAGE CONTENT START -->
        <div class="w-100 d-lg-flex d-md-flex d-block">
            <!-- MESSAGE CONTENT LEFT START -->
            <div class="msg-content-left border-top-0 border-bottom-0">
                <div class="msg-header d-flex align-items-center">
                    <div class="msg-header-left d-flex justify-content-between">

                        <div class="flex-lg-grow-1">
                            <form class="mb-0">
                                <div class="input-group rounded py-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0">
                                            <i class="fa fa-search f-12 text-lightest"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="user-search" class="form-control border-0 f-14"
                                        placeholder="<?php echo app('translator')->get('modules.messages.searchContact'); ?>">
                                </div>
                            </form>
                        </div>

                        <div class="pl-2 d-lg-none">
                            <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonPrimary::class, ['icon' => 'plus'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'new-chat-mbl']); ?><?php echo app('translator')->get('app.new'); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- This msgLeft id is for scroll plugin -->
                <div data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" id="msgLeft"
                    class="nav nav-tabs border-bottom-0" role="tablist">
                    <?php echo $__env->make('messages.user_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>
            <!-- MESSAGE CONTENT LEFT END -->

            <!-- MESSAGE CONTENT RIGHT START -->
            <div class="msg-content-right" id="msgContentRight">
                <div class="msg-header d-none d-lg-flex align-items-center">
                    <div class="msg-header-right w-100 d-flex justify-content-between align-items-center">
                        <div class="msg-sender-name">
                            <p class="f-15 text-capitailize text-dark mb-0 f-w-500 message-user"></p>
                        </div>
                        <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonPrimary::class, ['icon' => 'plus'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'new-chat']); ?><?php echo app('translator')->get('modules.messages.startConversation'); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                    </div>
                </div>

                <!-- MOBILE MESSAGE SENDER NAME START -->
                <div class="msg-sender-name d-flex d-lg-none mbl-sender-name align-items-center justify-content-between">
                    <p class="f-15 text-capitailize text-dark mb-0 f-w-500 message-user"></p>
                    <i class="fa fa-long-arrow-alt-right f-16 text-dark" onclick="closeMessageTab()"></i>
                </div>
                <!-- MOBILE MESSAGE SENDER NAME END -->

                <!-- CHAT BOX START -->
                <div class="chat-box">
                    <!-- This chatBox id is for scroll plugin -->
                    <div data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" id="chatBox"
                        class="tab-content" data-chat-for-user="">

                        <div id="tab1" class="tabcontent" style="display: block;">
                            <?php if (isset($component)) { $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Cards\NoRecord::class, ['icon' => 'comment-alt','message' => __('messages.selectConversation')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.no-record'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Cards\NoRecord::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33)): ?>
<?php $component = $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33; ?>
<?php unset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33); ?>
<?php endif; ?>
                        </div><!-- TAB END -->

                    </div>

                </div>
                <!-- CHAT BOX END -->

                <!-- SEND MESSAGE START -->

                <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'sendMessageForm','class' => 'd-none mb-0']); ?>
                    <input type="hidden" name="user_id" id="current_user_id">
                    <div class="w-100">
                        <textarea id="submitTexts" name="message"
                            class="form-control rounded-0 f-14 p-3 border-left-0 border-right-0 border-bottom-0" rows="3"
                            placeholder="<?php echo app('translator')->get('placeholders.message'); ?>"></textarea>

                        <div class="w-100 justify-content-start attach-send bg-white">
                            <a class="f-15 f-w-500" href="javascript:;" id="add-file"><i
                                    class="fa fa-paperclip font-weight-bold mr-1"></i><?php echo app('translator')->get('modules.projects.uploadFile'); ?></a>
                        </div>
                    </div>

                    <div class="col-md-12 d-none file-container">
                        <?php if (isset($component)) { $__componentOriginal97f972d3036ec98e45782eab9a9572b3af7fcdb9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\FileMultiple::class, ['fieldLabel' => __('app.add') . ' ' .__('app.file'),'fieldName' => 'file','fieldId' => 'file-upload-dropzone'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.file-multiple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\FileMultiple::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97f972d3036ec98e45782eab9a9572b3af7fcdb9)): ?>
<?php $component = $__componentOriginal97f972d3036ec98e45782eab9a9572b3af7fcdb9; ?>
<?php unset($__componentOriginal97f972d3036ec98e45782eab9a9572b3af7fcdb9); ?>
<?php endif; ?>
                        <input type="hidden" name="message_id" id="messageId">
                        <input type="hidden" name="type" id="message">

                        
                        <input type="hidden" name="user_list" id="user_list">
                        <input type="hidden" name="message_list" id="message_list">
                        <input type="hidden" name="receiver_id" id="receiver_id">
                    </div>

                    <div class="col-md-12 border-top-grey p-0">
                        <div class="w-100 justify-content-start attach-send bg-white">
                            <?php if (isset($component)) { $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Forms\ButtonPrimary::class, ['icon' => 'location-arrow'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'sendMessage','class' => 'mr-1']); ?>
                                <?php echo app('translator')->get('modules.messages.send'); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480)): ?>
<?php $component = $__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480; ?>
<?php unset($__componentOriginalad6cd9ca0c0f4e557ce8aae8581c3617ecf44480); ?>
<?php endif; ?>
                        </div>

                    </div>


                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>
                <!-- SEND MESSAGE END -->

            </div>
            <!-- MESSAGE CONTENT RIGHT START -->
        </div>
        <!-- MESSAGE CONTENT END -->
    </div>
    <!-- MESSAGE END -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <script src="<?php echo e(asset('vendor/jquery/dropzone.min.js')); ?>"></script>

    <script>

        var totalUnreadMessagesCount = parseInt("<?php echo e($unreadMessagesCount); ?>");

        <?php if(session('message_user_id')): ?>
            let message_user_id = <?php echo e(session('message_user_id')); ?>;

            setTimeout(() => {
                $('a[data-user-id="'+message_user_id+'"]').click();

            }, 500);

        <?php endif; ?>

        // change query parameter from url
        history.replaceState(null, null, "<?php echo e(route('messages.index')); ?>");

        /* Upload images */
        Dropzone.autoDiscover = false;

        //Dropzone class
        taskDropzone = new Dropzone("#file-upload-dropzone", {
            dictDefaultMessage: "<?php echo e(__('app.dragDrop')); ?>",
            url: "<?php echo e(route('message-file.store')); ?>",
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            },
            paramName: "file",
            maxFilesize: DROPZONE_MAX_FILESIZE,
            maxFiles: 10,
            autoProcessQueue: false,
            uploadMultiple: true,
            addRemoveLinks: true,
            parallelUploads: 10,
            acceptedFiles: DROPZONE_FILE_ALLOW,
            init: function () {
                taskDropzone = this;
                this.on("success", function(file, response) {
                    $('#chatBox').html(response.message_list);
                    showContent();
                    $.easyUnblockUI();employees
                    taskDropzone.removeAllFiles(true);
                })
            }
        });

        taskDropzone.on('sending', function (file, xhr, formData) {
            var ids = $('#messageId').val();
            formData.append('message_id', ids);
            formData.append('type', 'message');
            formData.append('receiver_id', $('#receiver_id').val());
            $.easyBlockUI();
        });

        taskDropzone.on('uploadprogress', function () {
            $.easyBlockUI();
        });

        // Submitting message
        $('body').on('click', '#sendMessage', function(e) {
            //getting values by input fields
            var url = "<?php echo e(route('messages.store')); ?>";

            $.easyAjax({
                url: url,
                container: '#sendMessageForm',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: "#sendMessage",
                data: $('#sendMessageForm').serialize(),
                success: function(response) {

                    $('#user_list').val(response.user_list);
                    $('#message_list').val(response.message_list);
                    $('#receiver_id').val(response.receiver_id);

                    // Reload left user-list
                    fetchUserList();

                    if (taskDropzone.getQueuedFiles().length > 0) {
                        messageId = response.message_id;
                        $('#messageId').val(response.message_id);
                        taskDropzone.processQueue();
                    } else {
                        showContent();
                    }
                }
            });

            return false;
        });

        function showContent() {
            $('#submitTexts').val('');
            $('#sendMessageForm').removeClass('d-none');
            scrollChat();
            $('#msgContentRight').addClass('d-block');
            $('.file-container').addClass('d-none');

            fetchUserMessages();
        }

        $('#new-chat, #new-chat-mbl').click(function() {
            const url = "<?php echo e(route('messages.create')); ?>";
            $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
            $.ajaxModal(MODAL_LG, url);
        });

        $('#user-search').keyup(function() {
            var url = "<?php echo e(route('messages.index')); ?>";
            var term = $(this).val();

            $.easyAjax({
                url: url,
                blockUI: true,
                container: "#msgLeft",
                data: {
                    term: term
                },
                success: function(response) {
                    if (response.status == "success") {
                        $('#msgLeft').html(response.userList);
                        $('#current_user_id').val('');
                        $('#chatBox').html('');
                        $('#sendMessageForm').addClass('d-none');
                    }
                }
            });
        });

        $('body').on('click', '#add-file', function() {
            $('.file-container').toggleClass('d-none');
            window.scrollBy(0, 200);
        });

        $('body').on('click', '.show-user-messages', function() {
            var id = $(this).data('user-id');
            var userName = $(this).data('name');
            var isUnreadMessage = $(this).hasClass('unread-message');
            $(this).removeData('unread-message-count')
            var unreadMessageCount = $(this).data('unread-message-count');

            if (isUnreadMessage) {
                $(this).find('.card-text').removeClass('text-dark');
                $(this).find('.card-text').removeClass('font-weight-bold');
                $(this).find('.unread-count').remove();
            }

            $('.message-user').html(userName);
            $('#current_user_id').val(id);
            $('.show-user-messages').removeClass('active');
            $(this).addClass('active');

            var url = "<?php echo e(route('messages.show', ':id')); ?>";
            url = url.replace(':id', id);

            $.easyAjax({
                url: url,
                blockUI: true,
                container: "#chatBox",
                data: { 'unreadMessageCount': unreadMessageCount },
                success: function(response) {
                    if (response.status == "success") {
                        $('#chatBox').html(response.html);
                        $('#user-no-'+response.id+' > a').attr("data-unread-message-count", 0);

                        // Set data value to chatBox to set active class later
                        $('#chatBox').attr("data-chat-for-user", id);

                        $('#sendMessageForm').removeClass('d-none');
                        scrollChat();
                        $('#msgContentRight').addClass('d-block');

                        if (totalUnreadMessagesCount > 0 && isUnreadMessage && response.unreadMessages == 0) {
                            var remainingUnreadMessages = parseInt(totalUnreadMessagesCount) - parseInt(unreadMessageCount);
                            if (remainingUnreadMessages > 0) {
                                $(body).find('.message-menu .menu-item-count').html(remainingUnreadMessages);
                            } else {
                                $(body).find('.message-menu .menu-item-count').html('');
                            }

                            totalUnreadMessagesCount = remainingUnreadMessages;
                        }
                    }
                }
            });

        });

        $('body').on('keypress', '#submitTexts', function(e) {
            var key = e.which;
            if (key == 13 && !e.shiftKey) // the enter key code
            {
                e.preventDefault();
                $('#sendMessage').click();
                return false;
            }
        });

        function scrollChat(params) {
            $('#chatBox').stop().animate({
                scrollTop: $("#chatBox")[0].scrollHeight
            }, 800);
        }

        $('body').on('click', '.delete-message', function() {
            var id = $(this).data('row-id');
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
                    var url = "<?php echo e(route('messages.destroy', ':id')); ?>";
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
                                $('#message-' + id).remove();

                                // Reload left user-list
                                fetchUserList();

                                if (response.chat_details.length == 0) {
                                    resetChatBoxView();
                                }

                            }
                        }
                    });
                }
            });
        });


        function resetChatBoxView() {
            $('#chatBox').html(`
            <div id="tab1" class="tabcontent" style="display: block;">
                <?php if (isset($component)) { $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Cards\NoRecord::class, ['icon' => 'comment-alt','message' => __('messages.selectConversation')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.no-record'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Cards\NoRecord::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33)): ?>
<?php $component = $__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33; ?>
<?php unset($__componentOriginaldd4a3acb850ed912fbb4dfa63003ef1bff802c33); ?>
<?php endif; ?>
            </div>
            `);

            $('#sendMessageForm').addClass('d-none');

            $('.message-user').html('');

        }

        function fetchUserList() {
            var url = "<?php echo e(route('messages.fetch_user_list')); ?>";

            $.easyAjax({
                url: url,
                type: "GET",
                success: function(response) {
                    $('#msgLeft').html(response.user_list);

                    let receiverId = $('#chatBox').data('chat-for-user');
                    $('#user-no-'+receiverId+' a').addClass('active');

                }
            });
        }

        function fetchUserMessages() {
            var currentUserId = $('#current_user_id').val();
            var url = "<?php echo e(route('messages.fetch_messages', ':id')); ?>";
            url = url.replace(':id', currentUserId);
            var token = "<?php echo e(csrf_token()); ?>";

            $.easyAjax({
                url: url,
                container: '#sendMessageForm',
                type: "POST",
                data: {
                    '_token': token,
                },
                success: function(response) {
                    $('#chatBox').html(response.message_list);
                    scrollChat();
                    $('#msgContentRight').addClass('d-block');
                }
            });
        }

        <?php if(isset($client)): ?>
            let clientId = '<?php echo e($client->id); ?>';
            $("a[data-user-id='" + clientId + "']").click();
        <?php endif; ?>

        if ((pusher_setting.status === 1 && pusher_setting.messages === 1) || (pusher_setting.status == "1" && pusher_setting.messages == "1")) {
            var channel = pusher.subscribe('messages-channel');
            channel.bind('messages.received', function(data) {
                fetchUserMessages()
            });

            $('#submitTexts').on('keydown', function() {
                var currentUserId = $('#current_user_id').val();
                let channel2 = Echo.private('chat');
                setTimeout(() => {
                    channel2.whisper('typing', {
                        from: "<?php echo e(user()->id); ?>",
                        to: currentUserId,
                        typing: true
                    })
                }, 300)
            });


            Echo.private('chat').listenForWhisper('typing', (e) => {
                var currentUserId = $('#current_user_id').val();

                if (e.to == Laravel.user.id && e.from == currentUserId) {
                    e.typing ? $('#chatBox').find('.typing').removeClass('invisible').addClass('visible') : $('#chatBox').find('.typing').removeClass('visible').addClass('invisible')
                    // remove is typing indicator after 0.9s
                    setTimeout(function() {
                        e.typing = false;
                        $('#chatBox').find('.typing').removeClass('visible').addClass('invisible');
                    }, 1500);
                }
            });
        }

        $('body').on('click', '.delete-file', function() {
            var id = $(this).data('row-id');
            var messageFile = $(this);
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
                    var url = "<?php echo e(route('message-file.destroy', ':id')); ?>";
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
                                messageFile.closest('.card').remove();
                            }
                        }
                    });
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\standalone\resources\views/messages/index.blade.php ENDPATH**/ ?>