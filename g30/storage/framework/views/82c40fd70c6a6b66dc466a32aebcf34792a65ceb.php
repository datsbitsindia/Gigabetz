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
                                       <th>Status</th>
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
        {data: 'flag', name: 'flag'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "columnDefs": [
            {
                "targets": 9,
                "render": function ( data, type, row ) {
                    //return data == 1 ? 'Delivered': 'Not delivered';
                    //return '<a href="../Expense_document/'+row["Expense_document"]+'" target="_blank">'+row["Expense_document"]+'</a>';
                    //return row["Expense_document"];
                     if(row["flag"] == 0){
                      return 'Not Approved';
                    }else{
                       return 'Approved';  
                    }
                    
               
                }
            },
            
            {
                "targets": 10,
                "orderable": false,
                "render": function ( data, type, row ) {
                    if(row["flag"] == 0){
                      return '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'+row["id"]+'" star_status="1">Approved</a>';  
                    }else{
                      return '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'+row["id"]+'" star_status="0">Not Approved</a>';    
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

</script>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/admin/memberlisting.blade.php ENDPATH**/ ?>