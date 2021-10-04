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
            <!-- BEGIN PAGE TITLE
            <h1 class="page-title"> Edit
                <small>User Page</small>
            </h1>-->
            
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
                                </tbody>
                                <?php 
                                if(!empty($data)){
                                ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($u->id); ?></td>
                                        <td><?php echo e($u->applicant_name); ?></td>
                                        <td><?php echo e($u->father_name); ?></td>
                                        <td><?php echo e($u->email); ?></td>
                                        <td><?php echo e($u->village); ?></td>
                                        <td><?php echo e($u->aadhar_no); ?></td>
                                        <td><?php echo e($u->city); ?></td>
                                        <td><?php echo e($u->whatsapp); ?></td>
                                        <td><?php echo e($u->emergency_contact); ?></td>
                                        <td>
                                            <?php 
                                            if($u->flag == 0){
                                                echo 'Not Approved';
                                            }else{
                                                echo 'Approved'; 
                                            }
                                            ?>
                                        </td>
                                        
                                        <td>
                                            <?php 
                                            if($u->flag == 0){
                                                echo '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'.$u->id.'" star_status="1">Approved</a>';
                                            }else{
                                                echo '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'.$u->id.'" star_status="0">Not Approved</a>'; 
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php }else{
                                echo '<tr><td colspan="12">No added Members</td></tr>';
                                } ?>
                                </tbody>
                                
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
<script type="text/javascript">
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
              //$('#get_list_data').DataTable().ajax.reload();
              //alert(response);
              window.location.reload();
            }
            });
        }   
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/admin/viewmember.blade.php ENDPATH**/ ?>