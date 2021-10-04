<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
CONTACT
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section page-title">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-9">
                <div class="wrapper">
                    <div class="inner">
                        <?php if(isset($msg)){ echo '<div class="alert alert-success">'.$msg.'</div>'; } ?>
                        <form action="" method="POST">
                            <h3>SEND A MESSAGE</h3>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-group">
                                        <input type="text" class="form-control" name="name" required>
                                        <span>Your Name</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-group">
                                        <input type="text" class="form-control"  name="email" required>
                                        <span for="">Your Mail</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-group">
                                        <input type="text" class="form-control"  name="contact" required>
                                        <span for="">Your Contact No.</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-group" >
                                        <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
                                        <span for="">Your Message</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>-->

            <div class="col-md-6 offset-md-4">
                <h4>Contact Information</h4>
                <div class="contact-information">
                    <div class="contact-information-row">
                        <div class="contact-information-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-information-content">
                            <strong>Telephone :</strong><br>
                            (+91) 8160078061
                        </div>
                    </div>
                    <div class="contact-information-row">
                        <div class="contact-information-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-information-content">
                            <strong>E-mail :</strong><br>
                            jayanandkaraksangh@gmail.com
                        </div>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215456295/domains/jayanandkarak.in/public_html/resources/views/contact.blade.php ENDPATH**/ ?>