<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php"); 

    $user_name= $_POST['user_name'];
    $email= $_POST['email'];
    $password_= $_POST['password_'];
    $active= $_POST['active'];
    



$query = "SELECT * FROM user";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create task
 $query = "INSERT INTO user(
user_name,
email,
password_,
active

 ) VALUES (
'$user_name',
'$email',
'$password_',
'$active'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>