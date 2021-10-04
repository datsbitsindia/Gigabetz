<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Registration
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


            <div class="col-md-12 ml-sm-auto col-lg-12 text-light page-height">
                <div class="all-page-box">
                    <div class="all-page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <div class="stock-box">
				<?php if($message = Session::get('success')): ?>
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong><?php echo e($message); ?></strong>
				</div>
				<?php endif; ?>


				<?php if($message = Session::get('error')): ?>
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong><?php echo e($message); ?></strong>
				</div>
				<?php endif; ?>
                    <form method="POST" action="<?php echo e(route('formaddusers')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Personal Detail:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    <div class="row">
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="username" class="col-form-label text-md-right"><?php echo e(__('User Name')); ?></label>
                                                        <input id="username" type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username">
                            
                                                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="name" class="col-form-label text-md-right"><?php echo e(__('Full Name')); ?></label>
                                                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                            
                                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="password" class="col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
                            
                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="password-confirm" class="col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                                    </div>
            								    </div>
            								    
            								    
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="email" class="col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>
                                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                            
                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="phone" class="col-form-label text-md-right"><?php echo e(__('Phone Number')); ?></label>
                                                        <input id="phone" type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="phone">
                            
                                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								</div>
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Account Details:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    <div class="row">
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="RoleID" class="col-form-label text-md-right"><?php echo e(__('RoleID')); ?></label>
                                                        <select id="RoleID" class="form-control <?php $__errorArgs = ['RoleID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="RoleID">
                                                            <option value="">Select Account Type</option>
                    										<option value="1">Super Master</option>
                                                            <option value="2">Admin</option>
                        								</select>
                                                        <?php $__errorArgs = ['RoleID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="ExposureLimit" class="col-form-label text-md-right"><?php echo e(__('ExposureLimit')); ?></label>
                                                        <input id="ExposureLimit" type="text" class="form-control <?php $__errorArgs = ['ExposureLimit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ExposureLimit" value="<?php echo e(old('ExposureLimit')); ?>" required autocomplete="ExposureLimit" >
                            
                                                        <?php $__errorArgs = ['ExposureLimit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="CreditReference" class="col-form-label text-md-right"><?php echo e(__('CreditReference')); ?></label>
                            
                                                        <input id="CreditReference" type="text" class="form-control <?php $__errorArgs = ['CreditReference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="CreditReference" value="<?php echo e(old('CreditReference')); ?>" required autocomplete="CreditReference" >
                        
                                                        <?php $__errorArgs = ['CreditReference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
            								    </div>
            								    
            								</div>
        								</div>
        								
        								
        							</div>
        							
        						</div>
                                
                            </div>
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Commission Setting:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        <tr>
        								            <th width="10%" style="width: 10%;"></th>
        								            <th width="30%" style="width: 30%;">Cricket</th>
        								            <th width="30%" style="width: 30%;">Soccer</th>
        								            <th width="30%" style="width: 30%;">Tennis</th>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Up Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Upline_1" type="text" class="form-control <?php $__errorArgs = ['Comm_Upline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Upline_1" value="0" readonly autocomplete="Comm_Upline_1" >
        								                 <?php $__errorArgs = ['Comm_Upline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Upline_2" type="text" class="form-control <?php $__errorArgs = ['Comm_Upline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Upline_2" value="0" readonly autocomplete="Comm_Upline_2" >
        								                 <?php $__errorArgs = ['Comm_Upline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Upline_3" type="text" class="form-control <?php $__errorArgs = ['Comm_Upline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Upline_3" value="0" readonly autocomplete="Comm_Upline_3" >
        								                 <?php $__errorArgs = ['Comm_Upline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Down Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Downline_1" type="number" min="0" max="100" class="form-control <?php $__errorArgs = ['Comm_Downline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Downline_1" value="0" required autocomplete="Comm_Downline_1" >
        								                 <?php $__errorArgs = ['Comm_Downline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Downline_2" type="number" min="0" max="100" class="form-control <?php $__errorArgs = ['Comm_Downline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Downline_2" value="0" required autocomplete="Comm_Downline_2" >
        								                 <?php $__errorArgs = ['Comm_Downline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Downline_3" type="number" min="0" max="100" class="form-control <?php $__errorArgs = ['Comm_Downline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Downline_3" value="0" required autocomplete="Comm_Downline_3" >
        								                 <?php $__errorArgs = ['Comm_Downline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Our</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Our_1" type="text" class="form-control <?php $__errorArgs = ['Comm_Our_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Our_1" value="100" readonly autocomplete="Comm_Our_1" >
        								                 <?php $__errorArgs = ['Comm_Our_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Our_2" type="text" class="form-control <?php $__errorArgs = ['Comm_Our_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Our_2" value="100" readonly autocomplete="Comm_Our_2" >
        								                 <?php $__errorArgs = ['Comm_Our_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Our_3" type="text" class="form-control <?php $__errorArgs = ['Comm_Our_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Comm_Our_3" value="100" readonly autocomplete="Comm_Our_3" >
        								                 <?php $__errorArgs = ['Comm_Our_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								    </table>
        								    
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Partnership Setting:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        <tr>
        								            <th width="10%" style="width: 10%;"></th>
        								            <th width="30%" style="width: 30%;">Cricket</th>
        								            <th width="30%" style="width: 30%;">Soccer</th>
        								            <th width="30%" style="width: 30%;">Tennis</th>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Up Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Upline_1" type="text" class="form-control <?php $__errorArgs = ['Part_Upline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Upline_1" value="0" required autocomplete="Part_Upline_1" >

                                                        <?php $__errorArgs = ['Part_Upline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Upline_2" type="text" class="form-control <?php $__errorArgs = ['Part_Upline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Upline_2" value="0" required autocomplete="Part_Upline_2" >

                                                        <?php $__errorArgs = ['Part_Upline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Upline_3" type="text" class="form-control <?php $__errorArgs = ['Part_Upline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Upline_3" value="0" required autocomplete="Part_Upline_3" >

                                                        <?php $__errorArgs = ['Part_Upline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Down Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Downline_1" type="text" class="form-control <?php $__errorArgs = ['Part_Downline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Downline_1" value="0" required autocomplete="Part_Downline_1" >

                                                        <?php $__errorArgs = ['Part_Downline_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Downline_2" type="text" class="form-control <?php $__errorArgs = ['Part_Downline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Downline_2" value="0" required autocomplete="Part_Downline_2" >

                                                        <?php $__errorArgs = ['Part_Downline_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Downline_3" type="text" class="form-control <?php $__errorArgs = ['Part_Downline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Downline_3" value="0" required autocomplete="Part_Downline_3" >

                                                        <?php $__errorArgs = ['Part_Downline_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Our</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Our_1" type="text" class="form-control <?php $__errorArgs = ['Part_Our_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Our_1" value="0" required autocomplete="Part_Our_1" >

                                                        <?php $__errorArgs = ['Part_Our_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Our_2" type="text" class="form-control <?php $__errorArgs = ['Part_Our_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Our_2" value="0" required autocomplete="Part_Our_2" >

                                                        <?php $__errorArgs = ['Part_Our_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Our_3" type="text" class="form-control <?php $__errorArgs = ['Part_Our_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Part_Our_3" value="0" required autocomplete="Part_Our_3" >

                                                        <?php $__errorArgs = ['Part_Our_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								    </table>
        								    
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Bet Limit Setting:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        <tr>
        								            <th width="10%" style="width: 10%;"></th>
        								            <th width="18%" style="width: 18%;">Cricket</th>
        								            <th width="18%" style="width: 18%;">Soccer</th>
        								            <th width="18%" style="width: 18%;">Tennis</th>
        								            <th width="18%" style="width: 18%;">Fancy</th>
        								            <th width="18%" style="width: 18%;">Casino</th>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Up Line</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_1" type="text" class="form-control <?php $__errorArgs = ['Bet_Min_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Min_1" value="0" required autocomplete="Bet_Min_1" >

                                                        <?php $__errorArgs = ['Bet_Min_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_2" type="text" class="form-control <?php $__errorArgs = ['Bet_Min_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Min_2" value="0" required autocomplete="Bet_Min_2" >

                                                        <?php $__errorArgs = ['Bet_Min_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_3" type="text" class="form-control <?php $__errorArgs = ['Bet_Min_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Min_3" value="0" required autocomplete="Bet_Min_3" >

                                                        <?php $__errorArgs = ['Bet_Min_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_4" type="text" class="form-control <?php $__errorArgs = ['Bet_Min_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Min_4" value="0" required autocomplete="Bet_Min_4" >

                                                        <?php $__errorArgs = ['Bet_Min_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_5" type="text" class="form-control <?php $__errorArgs = ['Bet_Min_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Min_5" value="0" required autocomplete="Bet_Min_5" >

                                                        <?php $__errorArgs = ['Bet_Min_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Down Line</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_1" type="text" class="form-control <?php $__errorArgs = ['Bet_Max_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Max_1" value="0" required autocomplete="Bet_Max_1" >

                                                        <?php $__errorArgs = ['Bet_Max_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_2" type="text" class="form-control <?php $__errorArgs = ['Bet_Max_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Max_2" value="0" required autocomplete="Bet_Max_2" >

                                                        <?php $__errorArgs = ['Bet_Max_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_3" type="text" class="form-control <?php $__errorArgs = ['Bet_Max_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Max_3" value="0" required autocomplete="Bet_Max_3" >

                                                        <?php $__errorArgs = ['Bet_Max_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_4" type="text" class="form-control <?php $__errorArgs = ['Bet_Max_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Max_4" value="0" required autocomplete="Bet_Max_4" >

                                                        <?php $__errorArgs = ['Bet_Max_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_5" type="text" class="form-control <?php $__errorArgs = ['Bet_Max_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Max_5" value="0" required autocomplete="Bet_Max_5" >

                                                        <?php $__errorArgs = ['Bet_Max_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Delay</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_1" type="text" class="form-control <?php $__errorArgs = ['Bet_Delay_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Delay_1" value="0" required autocomplete="Bet_Delay_1" >

                                                        <?php $__errorArgs = ['Bet_Delay_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_2" type="text" class="form-control <?php $__errorArgs = ['Bet_Delay_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Delay_2" value="0" required autocomplete="Bet_Delay_2" >

                                                        <?php $__errorArgs = ['Bet_Delay_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_3" type="text" class="form-control <?php $__errorArgs = ['Bet_Delay_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Delay_3" value="0" required autocomplete="Bet_Delay_3" >

                                                        <?php $__errorArgs = ['Bet_Delay_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_4" type="text" class="form-control <?php $__errorArgs = ['Bet_Delay_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Delay_4" value="0" required autocomplete="Bet_Delay_4" >

                                                        <?php $__errorArgs = ['Bet_Delay_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_5" type="text" class="form-control <?php $__errorArgs = ['Bet_Delay_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bet_Delay_5" value="0" required autocomplete="Bet_Delay_5" >

                                                        <?php $__errorArgs = ['Bet_Delay_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								    </table>
        								    
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Min-Max Odds:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        
        								        <tr>
        								            <td width="10%" style="width: 10%;">Minimum Odds</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="MinimumOdds" type="text" class="form-control <?php $__errorArgs = ['MinimumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="MinimumOdds" value="<?php echo e(old('MinimumOdds')); ?>" required autocomplete="MinimumOdds" >

                                                        <?php $__errorArgs = ['MinimumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Maximum Odds</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="MaximumOdds" type="text" class="form-control <?php $__errorArgs = ['MaximumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="MaximumOdds" value="<?php echo e(old('MaximumOdds')); ?>" required autocomplete="MaximumOdds" >

                                                        <?php $__errorArgs = ['MaximumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        								            </td>
        								        </tr>
        								        
        								    </table>
        								    
        								    <div class="form-group">
                                                <label for="TransctionCode" class="col-form-label text-md-right"><?php echo e(__('TransctionCode')); ?></label>
                    
                                                <input id="TransctionCode" type="text" class="form-control <?php $__errorArgs = ['TransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="TransctionCode" value="<?php echo e(old('TransctionCode')); ?>" required autocomplete="TransctionCode" >
                    
                                                <?php $__errorArgs = ['TransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        

                        

                        
                        
                        
						
						
						
						
						
						
						
                        
                        
                        
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="show_password" onclick="myFunction();" id="show_password" <?php echo e(old('show_password') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="show_password">
                                        <?php echo e(__('Show Password')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-theme btn-submit">
                                    <?php echo e(__('Add User')); ?>

                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>   
            </div>
















<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
$( "#Comm_Downline_1" ).keyup(function(e) {
     e.preventdefault();
    var v = $(this).val();
    if(v!="" && v != 0){
    var result = (100 - parseInt(v));
    $("#Comm_Our_1").val(result);
    }else{
         $("#Comm_Our_1").val(100);
    }
    e.preventDefault();
});
$( "#Comm_Downline_2" ).keyup(function() {
    var v = $(this).val();
    if(v!="" && v != 0){
    var result = (100 - parseInt(v));
    $("#Comm_Our_2").val(result);
    }else{
         $("#Comm_Our_2").val(100);
    }
});
$( "#Comm_Downline_3" ).keyup(function() {
    var v = $(this).val();
    if(v!="" && v != 0){
    var result = (100 - parseInt(v));
    $("#Comm_Our_3").val(result);
    }else{
         $("#Comm_Our_3").val(100);
    }
});
function myFunction() {
    
  var checkBox = document.getElementById("show_password");
  //var text = document.getElementById("text");
  let password2=document.getElementById('password');
  let passwordconfirm2=document.getElementById('password-confirm');

  if (checkBox.checked == true){
    password2.setAttribute('type','text');
    passwordconfirm2.setAttribute('type','text');
  } else {
     password2.setAttribute('type','password');
     passwordconfirm2.setAttribute('type','password');
  }
}

// $("body").on('click','.btn-submit',function(e)
// {
//     e.preventDefault();
//     var mid = $(this).attr("mid");
//     if(mid != '')
//     {
//       $.ajax({
//         'type': 'POST',
//         url: <?php echo json_encode(url('registeruser')); ?>,
//         //dataType: "json",
//         'data': {"_token": "<?php echo e(csrf_token()); ?>",mem_id: mid},
//         'cache': false,
//         'success': function (response)
//         {
//           //$('#get_list_data').DataTable().ajax.reload();
//           alert(response);
//         }
//         });
//     }   
// });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nationaltenders/public_html/crawling_tenders/g30/resources/views/addusers.blade.php ENDPATH**/ ?>