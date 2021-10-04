<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="generator" content="">
<title><?php echo $__env->yieldContent('title'); ?></title>
<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<!-- Custom styles-->
<link href="<?php echo e(asset('public/frontend/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>" rel="stylesheet">
<?php echo $__env->yieldContent('stylesheet'); ?>

</head>
<body>


    <?php echo $__env->yieldContent('header'); ?>
    
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH D:\xampp\htdocs\jalpesh\g30\resources\views/main.blade.php ENDPATH**/ ?>