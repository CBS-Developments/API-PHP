<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php"); 

    $user_name= $_POST['user_name'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $password_= $_POST['password_'];
    $phone= $_POST['phone'];
    $employee_ID= $_POST['employee_ID'];
    $designation= $_POST['designation'];
    $company= $_POST['company'];
    $user_role= $_POST['user_role'];
    $activate= $_POST['activate'];
    



$query = "SELECT * FROM user";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create task
 $query = "INSERT INTO user(
user_name,
first_name,
last_name,
email,
password_,
phone,
employee_ID,
designation,
company,
user_role,
activate

 ) VALUES (
'$user_name',
'$first_name',
'$last_name',
'$email',
'$password_',
'$phone',
'$employee_ID',
'$designation',
'$company',
'$user_role',
'$activate'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>