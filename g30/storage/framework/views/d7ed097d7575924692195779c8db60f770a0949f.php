<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
My Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section page-title">
    <div class="container">
        <h1>My Users</h1>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                <?php endif; ?>
                
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session()->get('error')); ?>

                    </div>
                <?php endif; ?>
                <div class="card shadow-lg mb-5">
                    <div class="card-body p-2">
                        <div class="mb-3">
                            <a href="<?php echo e(route('add-user')); ?>" class="btn btn-theme">Add Aaradhak</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_org_list_data">
                            <thead>
                                <tr>
                                    <th>Form Number</th>
                                    <th>Applicant Name</th>
                                    <th>Father Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Whatsapp</th>
                                    <th>Aadhar Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php if(!empty($data_users)): ?>
                                <?php $__currentLoopData = $data_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($f->id); ?></td>
                                    <td><?php echo e($f->applicant_name); ?></td>
                                    <td><?php echo e($f->father_name); ?></td>
                                    <td><?php echo e($f->age); ?></td>
                                    <td><?php echo e($f->gender); ?></td>
                                    <td><?php echo e($f->email); ?></td>
                                    <td><?php echo e($f->whatsapp); ?></td>
                                    <td><?php echo e($f->aadhar_no); ?></td>
                                    <td>
                                        <?php if($f->flag == 1): ?>
                                        <span class="badge badge-success">Approved</span>
                                        <?php else: ?>
                                        <span class="badge badge-Warning">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><a href="<?php echo e(route('edit-user',['id'=>$f->id])); ?>">Edit</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                 <?php else: ?>
                                 <tr>
                                    <td colspan="10" class="text-center">There are no member added in your account! Please Add Aardhak</td> 
                                  </tr>   
                                  <?php endif; ?>
                                
                            </tbody>
                        </table>
                    </div>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/myusers.blade.php ENDPATH**/ ?>