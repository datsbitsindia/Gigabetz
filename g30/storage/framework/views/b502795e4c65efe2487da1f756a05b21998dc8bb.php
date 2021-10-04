<?php $__env->startSection('stylesheet'); ?>
<style type="text/css">
.page-content-wrapper .page-content {
    padding: 5px 20px 10px;
}
.tabbable-line>.tab-content {
    border-top: 1px solid #dfdfdf;
    padding: 5px 0 0px;
}
.tabbable-line>.nav-tabs>li>a{
    padding: 5px 10px;
}
</style>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('admin.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
           
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line tabbable-tabdrop">
                        <ul class="nav nav-tabs parent_tab ul-parent">
                            <li class="active">
                                <a href="#dashboard" data-toggle="tab">Dashboard</a>
                            </li>                      
                        </ul>
                        <div class="tab-content" id="parent_0">

                            <div class="parent_tab_pane tab-pane active" id="dashboard">
                                <p> Howdy, I'm in Dashboard. </p>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('admin.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  
</script>    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215456295/domains/jayanandkarak.in/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>