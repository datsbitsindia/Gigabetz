

<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
page-header-fixed page-sidebar-closed-hide-logo page-content-white
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('admin.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo e(route('admindashboard')); ?>">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>User</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> User
                <small>Listing Page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-user font-dark"></i>
                                <span class="caption-subject bold capitalize"> Users List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_gallery_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                
                                    </tr>
                                </thead>
                                
                            </table>
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
 $(function(){
   $('#get_gallery_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: '<?php echo e(route('ajaxgallerylisting')); ?>',
        columns: [
        {data: 'id', name: 'id'},
        {data: 'title', name: 'title'},
        {data: 'description', name: 'description'},
        //{data: 'tags', name: 'tags'},
        {data: 'gallery_image', name: 'gallery_image'},
        //{data: 'image_size', name: 'image_size'},
        {data: 'created_date', name: 'created_date'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
 });   
 

</script>    
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jalpesh\ravi\resources\views/admin/gallerylisting.blade.php ENDPATH**/ ?>