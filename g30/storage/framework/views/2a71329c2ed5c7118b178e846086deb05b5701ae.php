<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $__env->yieldContent('title'); ?></title>
    
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/bootstrap-datepicker.min.css')); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
        
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/style.css')); ?>">
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php echo $__env->yieldContent('stylesheet'); ?>
        <link rel="icon" href="<?php echo e(asset('public/frontend/images/favicon.ico')); ?>" type="image/gif" sizes="16x16">
    </head>
    <body>
        
        <?php echo $__env->yieldContent('header'); ?>
    
    	<?php echo $__env->yieldContent('content'); ?>
    
    	<?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
    <!-- Body End -->
</html>
<?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/main.blade.php ENDPATH**/ ?>