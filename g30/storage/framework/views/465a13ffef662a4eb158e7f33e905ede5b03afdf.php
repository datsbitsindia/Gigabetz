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
                        <span>Member</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Member
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
                                <span class="caption-subject bold capitalize"> Member List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th>Userid</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        
                                        <th>Email</th>
                                         <th>Village</th>
                                          <th>Aadhar</th>
                                           <th>City</th>
                                            <th>Whatsapp</th>
                                             <th>Emg. Contact</th>
                                       
                                       <th>Photo</th>
                                       <th>AadharCard</th>
                                       
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
   $('#get_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
         ajax: '<?php echo e(route('ajaxmemberlisting')); ?>',
         columns: [
        {data: 'id', name: 'id'},
        {data: 'applicant_name', name: 'applicant_name'},
        {data: 'father_name', name: 'father_name'},
        {data: 'email', name: 'email'},
        {data: 'village', name: 'village'},
        {data: 'aadhar_no', name: 'aadhar_no'},
        {data: 'city', name: 'city'},
        {data: 'whatsapp', name: 'whatsapp'},
        {data: 'emergency_contact', name: 'emergency_contact'},
        {data: 'applicant_image', name: 'applicant_image'},
        {data: 'adharcard_image', name: 'adharcard_image'},
        
        ],
        "columnDefs": [
            
            
            {
                "targets": 10,
                "orderable": false,
                "render": function ( data, type, row ) {
                    if(row["adharcard_image"] != 'null' && row["adharcard_image"] != ''){
                    return '<a href="http://jayanandkarak.in/public/frontend/images/user_image/'+row["adharcard_image"]+'" target="_blank" download>Download</a>';  
                    }else{
                        return '';
                    }
                },
              
            },
            {
                "targets": 9,
                "orderable": false,
                "render": function ( data, type, row ) {
                    if(row["adharcard_image"] != 'null' && row["adharcard_image"] != ''){
                      return '<a href="http://jayanandkarak.in/public/frontend/images/user_image/'+row["applicant_image"]+'" target="_blank" download>Download</a>';  
                    }else{
                        return '';
                    }
                    //return row["ti_no"] +', ' + row["ti_ref_no"] +', '+data;
                    //return '<div class="starrating"><i class="fa fa-star"></i></div>';
                },
              
            },
            
            
          
            
        ],
    });
 });   
 
 $("body").on('click','.btn_starred_member',function(e)
    {
        
        e.preventDefault();
        
        var mid = $(this).attr("mid");
        var star_status = $(this).attr("star_status");
        
        if(mid != '')
        {
          $.ajax({
            'type': 'POST',
            url: <?php echo json_encode(url('updatestatus')); ?>,
            //dataType: "json",
            'data': {"_token": "<?php echo e(csrf_token()); ?>",mem_id: mid,star_status:star_status},
            'cache': false,
            'success': function (response)
            {
              $('#get_list_data').DataTable().ajax.reload();
              //alert(response);
            }
            });
        }   
    });

$("body").on('click','.delete_member',function(e)
    {
        
        e.preventDefault();
        
        var mid = $(this).attr("mid");
       
        
        if(mid != '')
        {
          $.ajax({
            'type': 'POST',
            url: <?php echo json_encode(url('deletemember')); ?>,
            //dataType: "json",
            'data': {"_token": "<?php echo e(csrf_token()); ?>",mem_id: mid},
            'cache': false,
            'success': function (response)
            {
              $('#get_list_data').DataTable().ajax.reload();
              //alert(response);
            }
            });
        }   
    });
</script>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215456295/domains/jayanandkarak.in/public_html/resources/views/admin/parthmemberlisting.blade.php ENDPATH**/ ?>