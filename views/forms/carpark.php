<?php
	session_start();
	$title = "Meeting Room";
	function get_content() {
	$place = "Carpark Page";

		$placeses = array("carpark");
		$url = "../../data/items/";
			
?>
<?php require_once '../partials/nav.php'; ?>

<?php require_once '../partials/header.php'; ?>

<?php require_once '../partials/nav2.php'; ?>

		<section class="container1">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Image</th>
						<th scope="col">Asset Tag</th>
						<th scope="col">Model</th>
						<th scope="col">Status</th>
						<th scope="col">Borrowed To</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>

				<?php foreach ($placeses as $key => $places) :
					$items = json_decode(file_get_contents($url.$places.".json"));
					foreach ($items as $id => $value) :?>

				<tbody>
					<tr>
						<th>
							<img src="<?php echo $value->image; ?>">
						</th>
						<td>123</td>
						<td><?php echo $value->modal; ?></td>
						<td>
							<span><?php echo $value->quantity; ?></span>
						</td>
						<td><?php echo '$username_admin_see'?></td>
						<td>
							<a 
								href="../../controllers/admin/activate_deactivate.php?id=<?php echo $id ?>&places=<?php echo $places?>" 
								class="btn btn-<?php $value->isActive ? print("secondary") : print('primary')?>">
								<?php $value->isActive ? print('Deactivate') : print('Activate')?>
							</a>
						</td>
						<td>
							<div>
								<span><a href="../../controllers/admin/process_delete.php?id=<?php echo $id?>&places=<?php echo $places?>" class="btn btn-danger" >Delete</a></span>
								<span><button class="btn btn-success ml-2" data-toggle="modal" data-target="#editModal">Edit</button>

								<div class="modal fade" id="editModal">
									<div class="modal-dialog">
										<div class="modal-content">

											<div class="modal-header">
												<h5 class="modal-title">Edit Product</h5>
											</div>

											<div class="modal-body">
												<form method="POST" action='/controllers/admin/process_edit.php' enctype="multipart/form-data">
													<input type="hidden" name="id" value="<?php echo $id?>">
													<input type="hidden" name="placeses" value="<?php echo $places?>">

													<div class="form-group">
														<label>Image</label>
														<img src="<?php echo $value->image ?>" class="d-block img-fluid">
														<input type="file" name="image" class="form-control" value="<?php echo $value->image ?>">
														<input type="hidden" name="current_image" class="form-control" value="<?php echo $value->image ?>">
													</div>


													<div class="form-group">
														<label>Model</label>
														<input type="text" name="modal" class="form-control" value="<?php echo $value->modal ?>">
													</div>

													<div class="form-group">
														<label>Status</label>
														<input type="number" name="quantity" max="99" min="1">
													</div>

													<button class="btn btn-primary">Submit</button>

												</form>
											</div>

											<div class="modal-footer">
												<button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
											</div>

										</div>
									</div>
								</div>
							</div>
								</span>
							</div>


							<div>
								<?php if($value->isActive) :?>
								<a 
								href="../../controllers/admin/process_borrow.php?id=<?php echo $id ?>&places=<?php echo $places?>" 
								class="btn btn-warning">Borrow</a>
							<?php endif; ?>

								<?php if(!$value->isActive) :?>
								<span class="btn disabled">Borrow</span>
							<?php endif; ?>
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


<?php

	}
	require_once '../partials/layout.php';
?>