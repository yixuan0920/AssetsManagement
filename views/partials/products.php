<?php
	session_start();
	$title = "Products Upload";
	$place = "Upload Page";
	function get_content() {

?>
	<div class="container1 mt-5 mb-5">
		<div class="row">
			<div class="col-md-6">
				<h3>Upload Product</h3>
			</div>

			<div class="col-md-6">
				<form method="POST" action="/controllers/update/process_add_product.php" enctype="multipart/form-data">

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>

					<div class="form-group">
						<label>Model</label>
						<input type="text" name="modal" class="form-control">
					</div>

					<div class="form-group">
						<label>Quantity</label>
						<input type="number" name="quantity" class="form-control" min="1" max="99">
					</div>

					<div class="form-group">
						<label src="#place">Choose a place</label>
						<select id="place" name="placeses">
							<option value="meetingRoom">Meeting Room</option>
							<option value="carpark">Carpark</option>
							<option value="library">Library</option>
							<option value="gymRoom">Gym Room</option>
							<option value="officeAssets">Office Assets</option>
						</select>
					</div>

					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	



<?php
	}
	require_once "layout.php";
?>