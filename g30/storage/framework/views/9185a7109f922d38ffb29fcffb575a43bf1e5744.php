<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
ABOUT
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="colorlib-main">
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container px-md-0">
            <div class="row d-flex no-gutters">
                <?php if(!empty($data_users)): ?>
                <?php $__currentLoopData = $data_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 portfolio-wrap-2">
                    <div class="row no-gutters align-items-center">
                        <div href="<?php echo e(route('gallerydetails', $f->id)); ?>" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url(<?php echo e(asset('public/frontend/images/gallery/'.$f->gallery_image)); ?>);">
                            <div class="text p-4 p-md-5 ftco-animate">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading"><?php echo e($f->image_size); ?></span>
                                        <h2 class="mb-4"><a href="<?php echo e(route('gallerydetails', $f->id)); ?>"><?php echo e($f->title); ?></a></h2>
                                        <p><a href="<?php echo e(route('gallerydetails', $f->id)); ?>" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>                

            </div>
            <div class="row d-flex">
                <div class="col-md-12">
                    <a href="#" class="btn-custom-load d-block w-100 text-center py-4">Load more <span class="fa fa-refresh"></span></a>
                </div>
            </div>
        </div>
    </section>
</div><!-- END COLORLIB-MAIN -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jalpesh\ravi\resources\views/gallery.blade.php ENDPATH**/ ?>