<?php $__env->startSection('main-content'); ?>
    <div class="container" style="margin: 10px 69px;padding: 53px;">
        <form method="POST" action="#">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $formFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group col-6">
                    <label for="<?php echo e($field['name']); ?>"><?php echo e($field['label']); ?></label>
                    <?php if($field['type'] === 'text'): ?>
                        <input type="text" name="<?php echo e($field['name']); ?>" id="<?php echo e($field['name']); ?>" class="form-control" value="<?php echo e(old($field['name'])); ?>">
                        <?php elseif($field['type'] === 'date'): ?>
                        <input type="date" name="<?php echo e($field['name']); ?>" id="<?php echo e($field['name']); ?>" class="form-control" value="<?php echo e(old($field['name'])); ?>">
                        <?php elseif($field['type'] === 'textarea'): ?>
                        <textarea name="<?php echo e($field['name']); ?>" id="<?php echo e($field['name']); ?>" class="form-control"><?php echo e(old($field['name'])); ?></textarea>
                        <?php elseif($field['type'] === 'number'): ?>
                        <input type="text" name="<?php echo e($field['name']); ?>" id="<?php echo e($field['name']); ?>" class="form-control" value="<?php echo e(old($field['name'])); ?>">
                        <?php elseif($field['type'] === 'select'): ?>
                        <select name="<?php echo e($field['name']); ?>" id="<?php echo e($field['name']); ?>" class="form-control">
                            <?php if(isset($field['options'])): ?>
                            <?php $__currentLoopData = $field['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($option['value']); ?>" <?php echo e(old($field['name']) === $option['value'] ? 'selected' : ''); ?>><?php echo e($option['label']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('frontend/js/jquery.form.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/contact.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fatma\Downloads\chalange\resources\views/frontend/pages/form-show.blade.php ENDPATH**/ ?>