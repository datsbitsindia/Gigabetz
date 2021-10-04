<?php $__env->startSection('stylesheet'); ?>
<style>
.imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
    /*background:url(../images/profile-pic-dummy.png);*/
    background-color:#fff;
    background-size: cover;
    background-repeat:no-repeat;
    display: inline-block;
    box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
</style>
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
                        <span>Gallery</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE
            <h1 class="page-title"> Edit
                <small>User Page</small>
            </h1>-->

            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-user"></i>
                                <span class="caption-subject"> Gallery details</span>
                            </div>
                            <div class="actions">             
                                
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="edit_user_success">
                                        
                            </div>

                            <form action="<?php echo e(route('posteditgallery')); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="<?php echo e($data->title); ?>" class="form-control">
                                                <?php $__errorArgs = ['title'];
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
                                       
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <!-- <input type="text" name="description" value="<?php echo e(old('description')); ?>" class="form-control"> -->
                                                <textarea name="description" class="form-control" rows="5"><?php echo e($data->description); ?></textarea>
                                                <?php $__errorArgs = ['description'];
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

                                        <div class="col-md-4 imgUp form-group">
                                            <div class="imagePreview" style="background-image:url('<?php echo e(asset('public/frontend/images/gallery/'.$data->gallery_image)); ?>')"></div>
                                            <label class="btn btn-block btn-primary">*Upload Photo
                                            <input type="file" class="uploadFile img" value="" name="gallery_image" id="gallery_image" style="width: 0px;height: 0px;overflow: hidden;">
                                            </label>
                                            <span id="err_gallery_image" class="error"></span>
                                        </div>
                                        
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label>Tags</label>
                                                <input type="text" name="tags" value="<?php echo e($data->tags); ?>" class="form-control">
                                                <?php $__errorArgs = ['tags'];
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
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label>Image Size</label>
                                                <input type="text" name="image_size" value="<?php echo e($data->image_size); ?>" class="form-control">
                                                <?php $__errorArgs = ['image_size'];
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
                                </div>
                                <div class="form-actions">
                                    <input type="hidden" name="gallery_image" value="<?php echo e($data->gallery_image); ?>">
                                    <input type="hidden" name="gid" value="<?php echo e($data->id); ?>">
                                    <button type="submit" class="btn blue">Submit</button>
                                    <a href="<?php echo e(route('gallerylisting')); ?>"><button type="button" class="btn default">Cancel</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <!-- <div class="row">
                <div class="col-md-12">
                    
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-user font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> User Information</span>
                            </div>
                        </div>
                        <div class="portlet-body form">

                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#user" data-toggle="tab"> User </a>
                                </li>
                                <li>
                                    <a href="#tender" data-toggle="tab"> Tender </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="user">
                                    <div id="edit_user_success">
                                        
                                    </div>
                                  
                                    <form action="<?php echo e(route('postedituser')); ?>" method="get" id="edit_user">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" name="fname" value="<?php echo e($data->first_name); ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" name="lname" value="<?php echo e($data->last_name); ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="<?php echo e($data->email); ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" name="company" value="<?php echo e($data->company_name); ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" value="<?php echo e($data->user_phone); ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <input type="hidden" value="<?php echo e($data->id); ?>" name="user_id">
                                            <button type="button" class="btn blue user_edit">Submit</button>
                                            <a href="<?php echo e(route('users')); ?>"><button type="button" class="btn default">Cancel</button></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tender">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Keywords</label>
                                                        <input type="text" placeholder="Enter Keywords" class="form-control" id="advance_keyword" name="Keywords">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Excluding Keyword</label>
                                                        <input type="text" placeholder="Enter Keywords" class="form-control" id="advance_keyword" name="Keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Geographical Indication</label>
                                                        <div class="mt-checkbox-inline">
                                                            <label class="mt-checkbox mt-checkbox-outline no-mb">
                                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Global
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-checkbox mt-checkbox-outline no-mb">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Domestic
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="multiple" class="control-label">Country</label>
                                                        <select id="multiple" class="form-control select2-multiple" multiple>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="multiple" class="control-label">State</label>
                                                        <select id="multiple" class="form-control select2-multiple" multiple>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Contract type:</label>
                                                        <select class="form-control" name="contract_type">
                                                            <option value="">Select</option>
                                                            <option value="11">Goods</option>
                                                            <option value="12">Service</option>
                                                            <option value="13">Works</option>
                                                            <option value="14">Mixed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="multiple" class="control-label">Form Of Contract</label>
                                                        <select id="multiple" class="form-control select2-multiple" multiple>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
            </div> -->
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
$(function() {
    $(document).on("change",".uploadFile", function()
    {
        var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jalpesh\ravi\resources\views/admin/edit_gallery.blade.php ENDPATH**/ ?>