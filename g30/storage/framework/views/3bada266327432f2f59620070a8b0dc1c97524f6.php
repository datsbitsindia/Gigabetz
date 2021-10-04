<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
404
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section page-title">
    <div class="container">
        <h1>Page Not Found</h1>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <h2 class="display-3">404</h2>
                    <p class="display-5">Oops! Something is wrong.</p>
                    <p><a href="<?php echo e(route('login')); ?>" class="btn btn-theme">Click Here To Login</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/errors/404.blade.php ENDPATH**/ ?>