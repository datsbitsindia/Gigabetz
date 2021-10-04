<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
  		<!-- Brand -->
  		<a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/frontend/images/logo.png')); ?>" alt="logo" width="" height=""></a>

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
        			<a class="nav-link" href="#">About</a>
      			</li>
      			
      			<li class="nav-item">
        			<a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact Us</a>
      			</li>
      			<?php if(Auth::guest()): ?>
				<li class="nav-item">
			        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
			    </li>
			    <!--<li class="nav-item">
			        <a class="nav-link" href="<?php echo e(route('register')); ?>">Registration</a>
			    </li>-->
			    <?php else: ?>
			    
			    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo e(Auth::user()->name); ?>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="<?php echo e(route('add-user')); ?>">Add Aaradhak</a>
                        <div class="dropdown-divider"></div>
                        <a class="nav-link" href="<?php echo e(route('my-users')); ?>">List of Aaradhaks</a>
                        <div class="dropdown-divider"></div>
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
    	                   onclick="event.preventDefault();
    	                                 document.getElementById('logout-form').submit();">
    	                    <?php echo e(__('Logout')); ?>

    	                </a>
    	    		    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    	                    <?php echo csrf_field(); ?>
    	                </form>
                    </div>
                </li>
                <li class="nav-item">
			        <a class="nav-link blink_me" href="<?php echo e(route('add-user')); ?>">Add Aaradhak</a>
			    </li>
			    <?php endif; ?>
    		</ul>
  		</div>
	</div>
</nav><?php /**PATH /home/u215456295/domains/jayanandkarak.in/public_html/resources/views/partials/_header.blade.php ENDPATH**/ ?>