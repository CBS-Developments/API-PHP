<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php"); 

    $user_name= $_POST['user_name'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password_= $_POST['password_'];
    $user_role= $_POST['user_role'];
    $active= $_POST['active'];
    



$query = "SELECT * FROM users_sp";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create task
 $query = "INSERT INTO users_sp(
user_name,
first_name,
last_name,
email,
mobile,
password_,
user_role,
active

 ) VALUES (
'$user_name',
'$first_name',
'$last_name',
'$email',
'$mobile',
'$password_',
'$user_role',
'$active'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>