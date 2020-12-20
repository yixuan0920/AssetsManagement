<?php 
	session_start();
//     $data = file_get_contents('../../data/users.json');
//     $users = json_decode($data);


//     $fullname = $_POST['fullname'];
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $password2 = $_POST['password2'];

//     foreach ($users as $i => $user){
//         # code...
//         if($_SESSION["user_details"]->username == $user->username){
//             $id = $i;
//             break;
//         }
//     }
        
//     $errors = 0;
//     $existing = false;

//     if(strlen($fullname) <2){
//     $errors++;
//     echo "Username is not available";
//     }

//     if(strlen($username) <8){
//         $errors++;
//         echo "Username should be atleast 8 characters";
//     }

// // if($password != $password2){
// //     $errors++;
// //     echo"password not match";
// // }

// if(strlen($password)<8){
//     $errors++;
//     echo "Password should be at least 8 characters";
// }
// //check if the username is already existing.
// // foreach($users as $indiv_user){
// //     if($indiv_user->username == $username){
// //         $existing = true;
// //     }
// // }
// // if($existing){
// //     $errors++;
// //     echo "Username already exists"; 
// // }

// if($errors == 0 ){
//     $users[$id] = $user;
//     $user->fullname = $fullname;
//     $user->username = $username;
//     $user->password = password_hash($password, PASSWORD_DEFAULT);

//     file_put_contents('../../data/users.json',json_encode($users,JSON_PRETTY_PRINT));

//     header ("Location: /views/forms/homepage.php");
// }

    include "../helpers.php";

    $url = "../../data/users.json";
    $users = get_data($url);
    $hv_user = false;
    // print_r($users);
    // die();
    $fullname = htmlspecialchars($_POST['fullname']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    foreach($users as $i => $user){
        if($_SESSION["user_details"]->username == $user->username){
            $id = $i;
            $hv_user = true;
            break;
        }
    }
    if(!$hv_user){
        echo "User not found";
        die();
    }

    if(strlen($username)<6){
        echo "Username is not available!";
        die();
    }
    if(strlen($password)<6){
        echo "Password could not least then 6!";
        die();
    }

    $users[$id]->fullname = $fullname;
    $users[$id]->username = $username;
    $users[$id]->password = password_hash($password,PASSWORD_DEFAULT);

    $_SESSION["user_details"] = $users[$id];
    
    file_put_contents($url,json_encode($users , JSON_PRETTY_PRINT));
    header("Location: /views/forms/homepage.php");


