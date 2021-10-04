<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for 404 page option 1" name="description" />
        <meta content="" name="author" />

        <?php echo $__env->make('admin.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('stylesheet'); ?>
        
        <link rel="shortcut icon" href="<?php echo e(asset('public/backend/assets/layouts/layout/img/favicon.ico')); ?>" />
    </head>
    <!-- END HEAD -->

<!-- BODY START -->
<body class="<?php echo $__env->yieldContent('body'); ?>">
    <div id="ajax_preloader"></div>
    <div class="page-wrapper">
         
        <?php echo $__env->yieldContent('header'); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->yieldContent('footer'); ?>
        
    </div>
    
    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo $__env->yieldPushContent('pageScripts'); ?>
</body>
<!-- Body End -->
</html><?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/admin/main.blade.php ENDPATH**/ ?>