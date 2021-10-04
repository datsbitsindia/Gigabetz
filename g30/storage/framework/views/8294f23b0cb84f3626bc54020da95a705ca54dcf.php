<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
HOME
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <div class="col-md-9 ml-sm-auto col-lg-10">
            <div class="all-page-box">
                <div class="all-page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">cricket</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bangabandhu T20 Cup</li>
                        </ol>
                    </nav>
                </div>
                <div class="ch-table">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
																						
                              
                              <th>User Name</th>
                              <th>Credit Reference</th>
                              <th>Balance</th>
							  <th>Client (P/L)</th>
							  <th>Exposure</th>
							  <th>Available Balance</th>
							  <th>U St</th>
							  <th>B St</th>
							  <th>Cricket</th>
							  <th>Soccer</th>
							  <th>Tennis</th>
							  <th>Video</th>
							  <th>Exposure Limit</th>
							  <th>Default %</th>
							  <th>Account Type</th>
							  <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
							<?php if(!empty($data)){  
							
							foreach($data as $k => $val){
							?>
							<tr>
                              <td>
                                <a href="#"><?php echo e($val['UserName']); ?></a>
                              </td>
							  <td><?php echo e($val['CreditReference']); ?></td>
							  <td><?php echo e($val['UserBalance']); ?></td>
							  <td><?php echo e($val['UserID']); ?></td>
							  <td><?php echo e($val['UserID']); ?></td>
							  <td><?php echo e($val['UserID']); ?></td>
							  <td><?php echo e($val['UST']); ?></td>
							  <td><?php echo e($val['BST']); ?></td>
							  <td><?php echo e($val['Cricket']); ?></td>
							  <td><?php echo e($val['Soccer']); ?></td>
							  <td><?php echo e($val['Tennis']); ?></td>
							  <td><?php echo e($val['UserID']); ?></td>
							  <td><?php echo e($val['ExposureLimit']); ?></td>
							  <td><?php echo e($val['DefaultPercent']); ?></td>
							  <td><?php echo e($val['UserID']); ?></td>
							  <td><?php echo e($val['UserID']); ?></td>
                              
                              
                            </tr>
							<?php
							}
							}else{ ?>
                            <tr>
                              <td>
                                No Record found!
                              </td>
                              
                            </tr>
                            <?php } ?>
                            
                            
                            
                            
                            
                            
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class="home-products-container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">5Five Cricket</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">Andar Bahar 2</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">20-20 Dragon Tiger 2</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">Baccarat 2</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">Baccarat</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">Lucky 7 - B</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="products-bx">
                                <a href="#">
                                    <div class="casinoicons">
                                        <img src="https://dzm0kbaskt4pv.cloudfront.net/v1/static/front/img/casinoicons/img/cricketv3.jpg" class="img-fluid">
                                        <div class="casino-name">Teenpatti 2.0</div>
                                    </div>
                                </a>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijil\g30\resources\views/listuser.blade.php ENDPATH**/ ?>