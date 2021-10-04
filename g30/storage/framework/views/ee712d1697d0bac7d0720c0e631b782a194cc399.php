<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
  		<!-- Brand -->
  		<a class="navbar-brand" href="index.php"><img src="<?php echo e(asset('public/frontend/images/logo.png')); ?>" alt="logo" width="" height=""></a>

  		<!-- Toggler/collapsibe Button -->
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<!-- Navbar links -->
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
      			</li>
	   			<li class="nav-item">
        			<a class="nav-link" href="#">Gallery</a>
      			</li>
      			
      			<li class="nav-item">
        			<a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact Us</a>
      			</li>
      			<?php if(Auth::guest()): ?>
				<li class="nav-item">
			        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="<?php echo e(route('register')); ?>">Registration</a>
			    </li>
			    <?php else: ?>
			    <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('add-user')); ?>">Add User</a>
          </li>
          <li class="nav-item">
        			<a class="nav-link" href="#">Track Status</a>
      		</li>
			    <li class="nav-item">
			    	<a class="nav-link" href="<?php echo e(route('logout')); ?>"
	                   onclick="event.preventDefault();
	                                 document.getElementById('logout-form').submit();">
	                    <?php echo e(__('Logout')); ?>

	                </a>
	    		    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
	                    <?php echo csrf_field(); ?>
	                </form>
			    </li>
			    <?php endif; ?>
    		</ul>
  		</div>
	</div>
</nav><?php /**PATH /home/tenderkings/public_html/crm/timir/g/resources/views/partials/_header.blade.php ENDPATH**/ ?>