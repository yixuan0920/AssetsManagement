<?php
	session_start();
	$title = "Home";
	$place = "Home Page";
	function get_content() {
		$placeses = array("meetingRoom", "carpark", "library", "gymRoom");
		$url = "data/items/";
			
?>

		<section class="container1">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Image</th>
						<th scope="col">Asset Tag</th>
						<th scope="col">Model</th>
						<th scope="col">Status</th>
						<th scope="col">Borrowed To</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<?php foreach ($placeses as $key => $places) :
					$items = json_decode(file_get_contents($url.$places.".json"));
					foreach ($items as $i => $value) :?>

				<tbody>
					<tr>
						<th>
							<img src="<?php echo $value->image; ?>">
						</th>
						<td>123</td>
						<td><?php echo $value->modal; ?></td>
						<td><?php echo $value->quantity; ?></td>
						<td></td>
						<td>
							<!-- <a 
								href="/controllers/activate_deactivate.php?id=<?php echo $i ?>" 
								class="btn btn-<?php $product->isActive ? print("secondary") : print('success')?>">
								<?php $product->isActive ? print('Deactivate') : print('Activate')?>
							</a> -->
						</td>
						<td>
							<div>
								<span><button class="btn btn-primary">Active</button></span>
								<span><button class="btn btn-success ml-2">Edit</button></span>
								<a href="/controllers/admin/process_delete.php?id=<?php echo $i?>&places=<?php echo $places?>" class="btn btn-danger" >Delete</a>
							</div>
							<div>
								<button class="btn btn-primary">Borrow</button>
							</div>
						</td>
					</tr>

					<tr>
						<th scope="row"></th>
						<div class="d-flex">
							<td></td>
							<td></td>
							<td></td>
						</div>
					</tr>
					<tr>
					</tr>
					
				</tbody>

			<?php endforeach;
					endforeach; ?>
			</table>
		</section>


		<footer class="bg-dark text-white py-4 text-center">
	<small>Asset Management System</small>
</footer>


<?php
	}
	require_once 'views/partials/layout.php';
?>
