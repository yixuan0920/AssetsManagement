<<<<<<< HEAD
<?php
	session_start();
	$title = "Booking";
	$place = "Booking Page";
	function get_content() {
		$placeses = array("meetingRoom", "carpark", "library", "gymRoom");
		$url = "data/items/";
			
?>

		<section class="container">
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
							<a 
								href="/controllers/activate_deactivate.php?id=<?php echo $i ?>" 
								class="btn btn-<?php $product->isActive ? print("secondary") : print('success')?>">
								<?php $product->isActive ? print('Deactivate') : print('Activate')?>
							</a>
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

=======
<?php 
session_start();
$title = "Log In";
function get_content(){
>>>>>>> 6094c611ab77b40338015758790319d5dee1eaad

?>
<section class="loginpage">

<div class="container-fluid w-100 h-100">
    <div class="row">
        <div class="col-md-6 mx-auto form1 p-0">
            <form method="POST" action="/views/forms/register.php">
            <h1 class="text-center mt-3">Hello World</h1>
            <p class="text-center mt-5 ml-3 mr-3">Welcome to ASM we provide the best service to your working space.</p>
            <div class="button2 " id="button2">
            <div id="circle"></div>
            <a href="/views/forms/register.php">Let's Go!</a>
            
            </form>
            </div>
           
        </div>
        <div class="col-md-6 mx-auto form2 p-0">
            <form method="POST" action="/controllers/process_login.php" class="loginbtn">
            <h2 class = "text-center mt-3">Login</h2>
            <div class="form-group">
            <input type="text" name="username" class="form-control mt-3" placeholder="Username">
            </div>
            <div class="form-group">
            <input type="password"name="password"class="form-control mb-0" placeholder="Password">
            </div>
            <button class="button mt-3" id=button><div id="circle"></div>Login</button>
        </form>
        </div>
    </div>
</div>

</section>

<?php
	}
	require_once 'views/partials/layout.php';
?>