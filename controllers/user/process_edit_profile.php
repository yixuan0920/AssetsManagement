<?php 
	session_start();
 $data = file_get_contents('../../data/person/users.json');
    $users = json_decode($data);


$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

foreach ($users as $i =>$user){
	# code...
	if($_SESSION["user_details"]->username == $user->username){
		$id = $i;
		break;
	}
}
    
$errors = 0;
$existing = false;

if(strlen($fullname) <2){
   $errors++;
   echo "Username is not available";
}

if(strlen($username) <8){
    $errors++;
    echo "Username should be atleast 8 characters";
}

if($password != $password2){
    $errors++;
    echo"password not match";
}

if(strlen($password)<8|| strlen($password2)<8){
    $errors++;
    echo "Password should be at least 8 characters";
}
//check if the username is already existing.
foreach($users as $indiv_user){
    if($indiv_user->username == $username){
        $existing = true;
    }
}
if($existing){
    $errors++;
    echo "Username already exists";
}

if($errors == 0 ){
    $user = $users[$id];
    $user->fullname = $fullname;
    $user->username = $username;
    $user->password = password_hash($password, PASSWORD_DEFAULT);

    file_put_contents('../../data/person/users.json',json_encode($users,JSON_PRETTY_PRINT));

    header("Location: /index.php");
}
