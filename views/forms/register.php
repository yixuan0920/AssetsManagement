<?php
    $title = "Register";
    function get_content(){


?>
    <section>
<<<<<<< HEAD
<div class="container w-100 h-100">
    <div class="row">
        <div class="col-md-6 mx-auto form2 p-0">
        <form method="POST" action="/controllers/process/process_register.php" class="registerpage">
            <h2 class="mt-3">Register</h2>
            <div class="form-group">
            <input type="text" name="fullname" class="form-control" placeholder="Fullname">
            </div>
            <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
            <input type="password"name="password"class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" name="password2" class="form-control" Placeholder="Confirm Password">
            </div>

            <button class="button mt-3" id=button><div id="circle"></div>Sign Up</button>
    </div>
        </form>
        </div>
=======
		<div class="container-fluid w-100 h-100">
		    <div class="row">
		        <div class="col-md-6 mx-auto form2 p-0">
		        	<form method="POST" action="/controllers/process_register.php" class="registerpage">
			            <h2 class="mt-3">Register</h2>
			            	<div class="form-group">
			            		<input type="text" name="fullname" class="form-control" placeholder="Fullname">
			           		</div>
			            	<div class="form-group">
			            		<input type="text" name="username" class="form-control" placeholder="Username">
			            	</div>
			           		 <div class="form-group">
			            		<input type="password"name="password"class="form-control" placeholder="Password">
			            	</div>
		            		<div class="form-group">
		                		<input type="password" name="password2" class="form-control" Placeholder="Confirm Password">
		            		</div>

            				<button class="button mt-3" id=button><div id="circle"></div>Sign Up</button>
        			</form>
    			</div>
>>>>>>> 6094c611ab77b40338015758790319d5dee1eaad
        <div class="col-md-6 mx-auto  form1 p-0">
            <form method="POST" action="/index.php" class="mr-3 ">
            <h1 class="text-center mt-5">Hello World</h1>
            <p class="text-center mt-5 mr-4 ml-4">Welcome to ASM we provide the best service to your working space.</p>
            <div class="button2 " id="button2">
            <div id="circle"></div>
            <a href="/">Sign In</a>
            </form>
            </div>
    </div>
<<<<<<< HEAD
</div>
</section>

=======
    </div>
</div>
</section>
>>>>>>> 6094c611ab77b40338015758790319d5dee1eaad
<?php
    }
    require_once '../partials/layout.php';
?>