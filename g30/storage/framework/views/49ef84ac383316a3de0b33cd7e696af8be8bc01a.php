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
                <div class="col-lg-12 pb-5 single">
                    <div class="row">
                        <div class="img img-single w-100" style="background-image: url(<?php echo e(asset('public/frontend/images/gallery/'.$data->gallery_image)); ?>);"></div>
                        <div class="px-5 mt-4">
                            <span class="subheading">SIZE: <?php echo e($data->image_size); ?></span>
                            <h1 class="mb-3"><?php echo e($data->title); ?></h1>
                            <p><?php echo e($data->description); ?></p>
                            <div class="tag-widget post-tag-container mb-5 mt-5">
                                <div class="tagcloud">
                                    <?php
                                    $tagarr = explode(',', $data->tags);
                                    foreach ($tagarr as $key => $value) {
                                    ?>
                                    <a href="#" class="tag-cloud-link"><?php echo $value; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <!--<div class="about-author d-flex p-4">
                                <div class="bio mr-5">
                                    <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                                </div>
                                <div class="desc">
                                    <h3>Fredrick Armstrong</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                                </div>
                            </div>-->


                            <!--<div class="pt-5 mt-5">
                                <h3 class="mb-5 font-weight-bold">6 Comments</h3>
                                <ul class="comment-list">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta">July 26, 2020 at 04:00pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>
                                    </li>

                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta">July 26, 2020 at 04:00pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>

                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>John Doe</h3>
                                                    <div class="meta">July 26, 2020 at 04:00pm</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>


                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>John Doe</h3>
                                                            <div class="meta">July 26, 2020 at 04:00pm</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>

                                                        <ul class="children">
                                                            <li class="comment">
                                                                <div class="vcard bio">
                                                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                                                </div>
                                                                <div class="comment-body">
                                                                    <h3>John Doe</h3>
                                                                    <div class="meta">July 26, 2020 at 04:00pm</div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                                    <p><a href="#" class="reply">Reply</a></p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta">July 26, 2020 at 04:00pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END comment-list -->
                                
                                <!--<div class="comment-form-wrap col-md-12 pt-5">
                                    <h3 class="mb-5">Leave a comment</h3>
                                    <form action="#" class="p-3 p-md-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name *</label>
                                                    <input type="text" class="form-control" id="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="website">Website</label>
                                                    <input type="url" class="form-control" id="website">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea name="" id="message" cols="20" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>-->
                        </div>
                    </div><!-- END-->
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jalpesh\ravi\resources\views/gallery_single.blade.php ENDPATH**/ ?>