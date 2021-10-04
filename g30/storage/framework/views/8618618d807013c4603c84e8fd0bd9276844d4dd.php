<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Edit User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section page-title">
    <div class="container">
        <h1>Edit User</h1>
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
            <form action="<?php echo e(route('postedituser')); ?>" name="registerForm" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
              <div class="row">
                <div class="col-md-3 form-group">
                  <!--<input type="text" class="form-control" name="register_num" placeholder="Sr No." value="">-->
                </div>
                <div class="col-md-6 heading-regis">
                  <h2>यात्रिक आवेदन पत्र</</h2>
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
unset($__errorArgs, $__bag); ?>" name="applicant_name" id="applicant_name" placeholder="*Name of Applicant / आराधक श्रीमान / श्रीमत:" autocomplete="off" value="<?php echo e($data->applicant_name); ?>">
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
unset($__errorArgs, $__bag); ?>" name="age" id="age" placeholder="*Age / उम्र:" autocomplete="off" value="<?php echo e($data->age); ?>"> 
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
                              <option value="Male"  <?php if($data->gender == 'Male'): ?> selected="selected" <?php endif; ?>>Male</option>
                              <option value="Female" <?php if($data->gender == 'Female'): ?> selected="selected" <?php endif; ?>>Female</option>
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
unset($__errorArgs, $__bag); ?>" name="father_name" id="father_name" placeholder="*Father / Husband Name / पिता / पति का नाम:" autocomplete="off" value="<?php echo e($data->father_name); ?>">
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
unset($__errorArgs, $__bag); ?>" name="village" id="village" placeholder="*Native Village / मूल गांव:" autocomplete="off" value="<?php echo e($data->village); ?>">
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
unset($__errorArgs, $__bag); ?>" name="aadhar_no" id="aadhar_no" placeholder="*Aadhar No / आधार कार्ड नं.:" value="<?php echo e($data->aadhar_no); ?>" readonly>
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
                        *Upload Photo<input type="file" class="uploadFile img" value="" name="applicant_image" id="applicant_image" style="width: 0px;height: 0px;overflow: hidden;">
                      </label>
                      <span id="err_applicant_image" class="error"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="adharcard_image" name="adharcard_image">
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
unset($__errorArgs, $__bag); ?>" name="postal_address" id="postal_address" placeholder="*Postal Address / पत्र व्यवहार का पता:" value="<?php echo e($data->postal_address); ?>">
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
unset($__errorArgs, $__bag); ?>" name="city" id="city" placeholder="*City / शहर:" value="<?php echo e($data->city); ?>">
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
unset($__errorArgs, $__bag); ?>" name="district" id="district" placeholder="*District / जिला:" value="<?php echo e($data->district); ?>">
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
unset($__errorArgs, $__bag); ?>" name="state" id="state" placeholder="*State / राज्य:" value="<?php echo e($data->state); ?>">
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
unset($__errorArgs, $__bag); ?>" name="pincode" id="pincode" placeholder="*Pincode / पिन कोड:" value="<?php echo e($data->pincode); ?>">
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
unset($__errorArgs, $__bag); ?>" id="mobile" name="mobile" placeholder="*Mobile No / मोबाइल:" value="<?php echo e($data->mobile); ?>">
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
unset($__errorArgs, $__bag); ?>" name="whatsapp" id="whatsapp"  placeholder="*Whatsapp No / व्हाट्सएप:" value="<?php echo e($data->whatsapp); ?>">
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
unset($__errorArgs, $__bag); ?>" name="health_issue" placeholder="Health Issue / स्वास्थय समस्या:" value="<?php echo e($data->health_issue); ?>">
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
                        <input type="text" class="form-control <?php $__errorArgs = ['emergency_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="emergency_contact" id="emergency_contact" placeholder="*Emergency Contact / आपातकालीन संपर्क:" value="<?php echo e($data->emergency_contact); ?>">
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
                    <div class="col-md-12 form-group">
                        <p class="text-danger">निम्न विवरण भरकर भिजवायें :</p>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName" class="">क्या आप मुमुक्ष है ?</label>
                      <input type="text" class="formStyle" name="mumuksh" placeholder="" value="<?php echo e($data->mumuksh); ?>">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">क्या आप छ'रि पालक संघ का पूरा पुण्य कमाने हेतु चंपल जूते व दाढ़ी सेविंग का त्याग करना चाहते है ?</label>
                      <input type="text" class="formStyle" name="punya_kamane_hetu" placeholder="" value="<?php echo e($data->punya_kamane_hetu); ?>">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">संघ में पौषद  लेनेवाले को प्राथमिकता दी जायेगी। पौषद</label>
                      <input type="text" class="formStyle" name="posad_din" placeholder="" value="<?php echo e($data->posad_din); ?>">
                      <label for="InputName">दिन करूँगा/करुँगी</label>
                    </div>
                    <!--<div class="col-md-12 form-group">
                      <label for="InputName" class="">If any Relatives Traveling with you in Yatra, Write Form No / यदि कोई रिश्तेदार यात्रा में आपके साथ यात्रा कर रहा है, तो फॉर्म नंबर लिखें:</label>
                      <input type="text" class="formStyle" name="relative_form_no" placeholder="" value="">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">Did you participated in chari palit sangh yatra before? if yes, Then write Name of Yatra & Gurubhagwant's Name / क्या आपने छ'रि पालित् संघ यात्रा में भाग लिया था? यदि हाँ, तो Yatra & Gurubhagwant का नाम लिखें</label>
                      <input type="text" class="form-control" name="before_yatra_name" placeholder="" value="">
                    </div>
                    <div class="col-md-12 form-group">
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
                          <li>आवेदनपत्र के साथ सरकारी आई.डी. (आधार कार्ड झेरोक्ष ) भी भेजना होगा।</li>
                          <li>कार्यक्रम में परिवर्तन करने का अधिकार आयोजक कमिटी का रहेगा।</li>
                          <li>यात्रा दरम्यान बेझ लगा के रखना है और वाहन प्रयोग का सर्वधा निषेध रहेगा।</li>
                          <li>फ़ोन से स्वीकृति मिलने के बाद ही दि. 19 -12 -2021 को दासपाँ नगर पधारें।</li>
                        </ul>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12 text-center">
                            <input type="hidden" name="e_applicant" value="<?php echo e($data->applicant_image); ?>">
                            <input type="hidden" name="e_adharcard" value="<?php echo e($data->adharcard_image); ?>">
                            <input type="hidden" name="uid" value="<?php echo e($data->id); ?>">
                        <input type="submit" name="submit" value="submit" class="btn btn-theme">
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>

             
            <div class="row">
              <div class="col-md-12">
                <p class="useful-things">आपकी सेवा में अर्पण: संथारा, ट्रेवलिंग बैग, कटासना, कंबल, मुहपत्ती, चरवला, नेपकिन, रुमाल, बटुआ, उपयोगी किट आदि उपकरण का लाभ हमें देवे।</p>
              </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-danger"><strong>Jai Jinendra<br/>Arham Aadi Chari Paalit Sangh.<br/>Link is Closed.</strong></p>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tenderkings/public_html/crm/timir/resources/views/edituser.blade.php ENDPATH**/ ?>