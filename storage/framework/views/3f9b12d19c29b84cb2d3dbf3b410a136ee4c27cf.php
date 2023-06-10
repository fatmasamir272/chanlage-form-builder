<?php $__env->startSection('title', 'E-SHOP || DASHBOARD'); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('admin.layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Builder</h1>
        </div>
        <form id="form_builder">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="inputEmail" class="col-form-label">Form Title</label>
                <input type="text" name="form_title" id="form_title" placeholder="Enter form title"
                    value="<?php echo e(old('email')); ?>" class="form-control">
            </div>
            <!-- Form fields go here -->
        </form>
        <button id="form_submit" onclick="saveFormData()" class="btn btn-success center">Save form</button>

        <!-- Content Row -->

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    

    <script type="text/javascript">
        jQuery($ => {
            const fbTemplate = document.getElementById('form_builder');
            $(fbTemplate).formBuilder();
        });

        function saveFormData() {
            var formData = $('form_builder').formBuilder('getData');
            var form_title = $('#form_title').val();
            $.ajax({
                url: "<?php echo e(route('formBuilder')); ?>",
                type: 'POST',
                data: {
                    formData: formData,
                    form_title: form_title,
                    _token: $('meta[name="csrf-token"]').attr('content'),

                },
                success: function(response) {
                     // Check if the response indicates success
                     if (response.error) {
                        toastr.error(response.error);

                     }
                    if (response.success) {
                        // Redirect to the home page
                        window.location.href = "<?php echo e(route('forms.index')); ?>";
                    }

                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fatma\Downloads\chalange\resources\views/admin/form-builder/index.blade.php ENDPATH**/ ?>