<?php
	session_start();
	$title = "User Setting";
	$place = "User Edit";
	$place1 = "user Edit";
	function get_content() {
			
?>

		<section class="container">
			<form method="POST" action="/controllers/user/process_edit_profile.php">
				<div class="form-group row">
					<label for="text" class="col-sm-2 col-form-label">User Name</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['user_details']->username ?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="text" class="col-sm-2 col-form-label">Full Name</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_SESSION['user_details']->fullname ?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>

					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>

					<div class="col-sm-10">
						<input type="password" class="form-control" id="password2" name="password2">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</section>





<?php
	}
	require_once "layout.php";
?>