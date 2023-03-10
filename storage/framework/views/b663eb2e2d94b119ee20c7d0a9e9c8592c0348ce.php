<script src="<?php echo e(asset('vendor/jquery/daterangepicker.min.js')); ?>"></script>

<script type="text/javascript">
    $(function() {

        var start = moment().subtract(89, 'days');
        var end = moment();

        function cb(start, end) {
            $('#datatableRange').val(start.format('<?php echo e(global_setting()->moment_date_format); ?>') +
                ' <?php echo app('translator')->get("app.to"); ?> ' + end.format(
                    '<?php echo e(global_setting()->moment_date_format); ?>'));
            $('#reset-filters').removeClass('d-none');
        }

        $('#datatableRange').daterangepicker({
            autoUpdateInput: false,
            locale: daterangeLocale,
            linkedCalendars: false,
            startDate: start,
            endDate: end,
            ranges: daterangeConfig
        }, cb);


        $('#datatableRange').on('apply.daterangepicker', function(ev, picker) {
            showTable();
        });

    });

</script>
<?php /**PATH D:\xampp\htdocs\standalone\resources\views/sections/daterange_js.blade.php ENDPATH**/ ?>