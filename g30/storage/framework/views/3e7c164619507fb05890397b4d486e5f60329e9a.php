<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Add Aaradhak
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section page-title">
    <div class="container">
        <h1>Add Aaradhak</h1>
    </div>
</div>

<!-- section about begin -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-lg">
          <div class="card-header"> 
            <img src="<?php echo e(asset('public/frontend/images/banner_form.jpg')); ?>" alt="registration image" width="100%">
            <div class="border-bottomimg"></div>
          </div>
          <div class="card-body">
              <?php if(isset($msg)){ echo '<div class="alert alert-success">'.$msg.'</div>'; } ?>
            <form action="<?php echo e(route('postadduser')); ?>" name="registerForm" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
              <div class="row">
                <div class="col-md-3 form-group">
                  <!--<input type="text" class="form-control" name="register_num" placeholder="Sr No." value="">-->
                </div>
                <div class="col-md-6 heading-regis">
                  <h2>यात्रिक आवेदन पत्र</h2>
                </div>
                <div class="col-md-12">
                  <div class="row">
                        <div class="col-md-9">
                            <p class="py-2 text-danger font-weight-bold">* Fields are Required</p>
                        </div>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-9 form-group">
                          <input type="text" class="form-control <?php $__errorArgs = ['applicant_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="applicant_name" id="applicant_name" placeholder="*Name of Applicant / आराधक श्रीमान / श्रीमती:" autocomplete="off" value="<?php echo e(old('applicant_name')); ?>">
                         <?php $__errorArgs = ['applicant_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="age" id="age" placeholder="*Age / उम्र:" autocomplete="off" value="<?php echo e(old('age')); ?>"> 
                            <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-2 form-group">
                            <select class="form-control <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="gender" id="gender">
                              <option value="">*Select Gender</option>
                              <option value="Male"  <?php if(old('gender') == 'Male'): ?> selected="selected" <?php endif; ?>>Male</option>
                              <option value="Female" <?php if(old('gender') == 'Female'): ?> selected="selected" <?php endif; ?>>Female</option>
                            </select>
                            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <!-- <label for="InputName">Sr No.</label> -->
                            <input type="text" class="form-control <?php $__errorArgs = ['father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="father_name" id="father_name" placeholder="*Father / Husband Name / पिता / पति का नाम:" autocomplete="off" value="<?php echo e(old('father_name')); ?>">
                            <?php $__errorArgs = ['father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control <?php $__errorArgs = ['village'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="village" id="village" placeholder="*Native Village / मूल गांव:" autocomplete="off" value="<?php echo e(old('village')); ?>">
                            <?php $__errorArgs = ['village'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" id="email" placeholder="*Email / ईमेल:" value="<?php echo e(Auth::user()->email); ?>" readonly>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="number" class="form-control <?php $__errorArgs = ['aadhar_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="aadhar_no" id="aadhar_no" placeholder="*Aadhar No / आधार कार्ड नं.:" value="<?php echo e(old('aadhar_no')); ?>">
                            <?php $__errorArgs = ['aadhar_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div> 
                      </div>
                    </div>
                    <div class="col-md-3 imgUp form-group">
                      <div class="imagePreview"></div>
                      <label class="btn btn-block btn-primary">
                        *Upload Photo<input type="file" class="uploadFile img" value="" name="applicant_image" id="applicant_image" required style="width: 0px;height: 0px;overflow: hidden;">
                      </label>
                      <span id="err_applicant_image" class="error"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="adharcard_image" name="adharcard_image" required>
                            <label class="custom-file-label" for="customFile">*Upload aadhar card</label>
                        </div>
                        <span id="err_adharcard_image" class="error"></span>
                    </div>
                    <div class="col-md-9 form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['postal_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="postal_address" id="postal_address" placeholder="*Postal Address / पत्र व्यवहार का पता:" value="<?php echo e(old('postal_address')); ?>">
                        <?php $__errorArgs = ['postal_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="city" id="city" placeholder="*City / शहर:" value="<?php echo e(old('city')); ?>">
                        <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="district" id="district" placeholder="*District / जिला:" value="<?php echo e(old('district')); ?>">
                        <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="state" id="state" placeholder="*State / राज्य:" value="<?php echo e(old('state')); ?>">
                        <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['pincode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pincode" id="pincode" placeholder="*Pincode / पिन कोड:" value="<?php echo e(old('pincode')); ?>">
                        <?php $__errorArgs = ['pincode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="number" class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="mobile" name="mobile" placeholder="*Mobile No / मोबाइल:" value="<?php echo e(old('mobile')); ?>">
                        <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="number" class="form-control <?php $__errorArgs = ['whatsapp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="whatsapp" id="whatsapp"  placeholder="*Whatsapp No / व्हाट्सएप:" value="<?php echo e(old('whatsapp')); ?>">
                        <?php $__errorArgs = ['whatsapp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <!--<div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="ongoing_tapasya" placeholder="Ongoing Tapasya / वर्तमान तपस्या क वगत:" value="">
                    </div>-->
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['health_issue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="health_issue" placeholder="Health Issue / स्वास्थय समस्या:" value="<?php echo e(old('health_issue')); ?>">
                        <?php $__errorArgs = ['health_issue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="number" class="form-control <?php $__errorArgs = ['emergency_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="emergency_contact" id="emergency_contact" placeholder="*Emergency Contact / आपातकालीन संपर्क:" value="<?php echo e(old('emergency_contact')); ?>">
                        <?php $__errorArgs = ['emergency_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <!--<div class="col-md-12 form-group">
                        <p class="text-danger">निम्न विवरण भरकर भिजवायें :</p>
                    </div>-->
                    <div class="col-md-12 form-group">
                      <label for="InputName" class="">Are you a mumukshu? / क्या आप मुमुक्षु है ?</label>
                     
                       <select class="form-control" name="mumuksh" id="mumuksh">
                         
                          <option value="No"  <?php if(old('mumuksh') == 'No'): ?> selected="selected" <?php endif; ?>>No</option>
                          <option value="Yes" <?php if(old('mumuksh') == 'Yes'): ?> selected="selected" <?php endif; ?>>Yes</option>
                        </select>
                      
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">Do you want to sacrifice champal, shoes and Beard Shaving to earn full merit of Chha’ri Paalit Sangh? / क्या आप छ'रि पालक संघ का पूरा पुण्य कमाने हेतु चंपल जूते व दाढ़ी सेविंग का त्याग करना चाहते है ?</label>
                    
                      <select class="form-control" name="punya_kamane_hetu" id="punya_kamane_hetu">
                          <option value="Yes" <?php if(old('punya_kamane_hetu') == 'Yes'): ?> selected="selected" <?php endif; ?>>Yes</option>
                          <option value="No"  <?php if(old('punya_kamane_hetu') == 'No'): ?> selected="selected" <?php endif; ?>>No</option>
                         
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">Preference will be given to the person taking Paushadh during the Sangh. / संघ में पौषद  लेनेवाले को प्राथमिकता दी जायेगी। पौषद</label>
                      <input type="text" class="formStyle" name="posad_din" placeholder="" value="<?php echo e(old('posad_din')); ?>">
                      <label for="InputName">दिन करूँगा/करुँगी</label>
                    </div>
                    <!--<div class="col-md-12 form-group">
                      <label for="InputName">Chhath Karke Saat Jatra / छठ करके साथ जात्रा <small>(17-18 Feb, 2021) (Only For Man)</small> &nbsp;</label>
                      <label class="radio-inline">
                        <input type="radio" name="chhath_yatra" value="Yes"> Yes
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="chhath_yatra" value="No" checked> No
                      </label>
                    </div>-->
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <h3 class="notice-title">यात्रा संघ के आवश्यक नियम एवं सुचना</h3>
                        <ul class="notice-list">
                          <li>यात्रिक को जिनाझा एवं छ:री नियमो का पालन करना होगा।</li>
                          <li>यात्रिक को नित्य एकासणा तप , व्याख्यान , दोनों समय प्रतिक्रमण एवं सर्व कार्यक्रमों में सामुहिक आराधना करनी आवश्यक है।</li>
                          <li>वर्षीतप एवं 500 आयंबिल करनेवाले आराधको को सुबह 9 बजे व शाम को 4 बजे बियासणा कराया जायेगा।</li>
                          <li>आयोजक परिवार द्वारा सभी यात्रिकों को बहुमान स्वरूप यात्रा में आवश्यक वस्तुओं का किट प्रदान की जायेगी।</li>
                          <li>पौषध , पूजा के कपडे उपकरण सामग्री आपकी नियमित दवाईया एवं डॉक्टर की फाइल साथ में लेकर पधारे।</li>
                          <li>किंमती सामान (दागिना) , सुटकेश , पेटी एवं अतिरित्क सामान साथ में नहीं लावे।</li>
                          <li>तीर्थयात्रा संघ में लुंगी ,बरमुडा , गाउन एवं अभद्र वस्र परिधान नहीं करे।</li>
                          <li>कार्यक्रम में परिवर्तन करने का अधिकार आयोजक कमिटी का रहेगा।</li>
                          <li>यात्रा दरम्यान बेझ लगा के रखना है और वाहन प्रयोग का सर्वथा निषेध रहेगा।</li>
                          <li>फ़ोन से स्वीकृति मिलने के बाद ही दि. 19 -12 -2021 को दासपाँ नगर पधारें।</li>
                        </ul>
                      </div>
                  </div>
                  
                    <div class="row">
                      <div class="col-md-12">
                        <p class="useful-things">संघ के सभी नियम हमने पढ़ लिए है। हम नियमो का पालन एवं स्वीकार करते है।</p>
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <input type="submit" name="submit" id="btn_save_user" value="submit" class="btn btn-theme">
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>

             
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-danger"><strong>सूचना : आवेदन पत्र   01/10/2021  दिनांक तक उपलब्ध होगा</strong></p>
                </div>
            </div>
            
             
            </form>
            
              

        </div><!---modal-body--->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section about end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215456295/domains/jayanandkarak.in/public_html/resources/views/adduser.blade.php ENDPATH**/ ?>