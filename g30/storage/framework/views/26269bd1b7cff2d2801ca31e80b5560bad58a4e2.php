<?php $__env->startSection('stylesheet'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo e(asset('public/backend/assets/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('public/backend/assets/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo e(asset('public/backend/assets/global/css/components.min.css')); ?>" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo e(asset('public/backend/assets/global/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo e(asset('public/backend/assets/pages/css/login.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<style>
.login {
    background-color: #ddd!important;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Login
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('body'); ?>
login
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!-- BEGIN LOGO -->
        <div class="logo">
            <a href="<?php echo e(url('/')); ?>">
                <!--<img src="<?php echo e(asset('public/backend/assets/pages/img/logo-big.png')); ?>" alt="" />-->
                <img src="<?php echo e(asset('public/frontend/images/logo.png')); ?>" alt="" />
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->

        <div class="content">
            <!-- BEGIN LOGIN FORM -->
             <?php if(count($errors) > 0): ?>
               <div class = "alert alert-danger">
                  <ul>
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
               </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                <div class = "alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>            
                        
                           
                    
            <form class="login-form" action="<?php echo e(route('admin.auth')); ?>" method="post">
                 <?php echo csrf_field(); ?>

                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">E-Mail</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="E-mail" name="email" value="<?php echo e(old('email')); ?>"/> 
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> 
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label>
                    <!--<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>-->
                </div>
                
                
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
           
        </div>
        <div class="copyright"> 2014 © . Admin Dashboard Template. </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!--[if lt IE 9]>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/respond.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/excanvas.min.js')); ?>"></script> 
<script src="<?php echo e(asset('public/backend/assets/global/plugins/ie8.fix.min.js')); ?>"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo e(asset('public/backend/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(asset('public/backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo e(asset('public/backend/assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(asset('public/backend/assets/pages/scripts/login.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/backend/assets/common.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- END THEME LAYOUT SCRIPTS -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jalpesh\ravi\resources\views/admin/login.blade.php ENDPATH**/ ?>