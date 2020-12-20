<nav class="navbar navbar-expand-lg position-a w-100">
	<a href="/" class="navbar-brand text-white">Assets Management</a>
	<?php if(isset($_SESSION['user_details']) && $_SESSION['user_details']->username) :?>
		<p class="text-white">
			<?php echo $_SESSION['user_details']->fullname?>
		</p>
			<?php endif; ?>
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
		<span class="text-white">MENU</span>
		<span><i class="fa fa-bars text-white" aria-hidden="true"></i></span>
	</button>

	<div class="navbar-collapse	apse navbar-collapse text-center" id="navbarMenu">
		<div class="navbar-nav ml-auto">

			<a href="/" class="nav-link text-white">Home</a>

			<?php if(!isset($_SESSION['user_details'])):?>
			<a href="/views/forms/login.php" class="nav-link text-white">Login</a>
			<a href="/views/forms/register.php" class="nav-link text-white">Register</a>
		<?php endif;?>

			<?php if(isset($_SESSION['user_details']) && !$_SESSION['user_details']->isAdmin) :?>
			<a href="/views/partials/user_edit.php" class="nav-link text-white">Booking</a>
		<?php endif;?>

			<?php if(isset($_SESSION['user_details']) && $_SESSION['user_details']->isAdmin) :?>
			<a href="/views/partials/products.php" class="nav-link text-white">Management</a>
		<?php endif;?>

			<a href="/views/partials/user_edit.php" class="nav-link text-white">UserEdit</a>

			<a href="/controllers/process/process_logout.php" class="nav-link text-white">Logout</a>

		</div>
	</div>
	
</nav>