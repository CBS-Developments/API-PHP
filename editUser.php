<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$user_name  = $_POST['user_name'];
$first_name  = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email  = $_POST['email'];
$password_  = $_POST['password_'];
$phone  = $_POST['phone'];
$employee_ID  = $_POST['employee_ID'];
$designation  = $_POST['designation'];
$company  = $_POST['company'];



$query = "SELECT * FROM user WHERE user_name='$user_name'";  
 

$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE user SET
        first_name	 = '$first_name	',  
        last_name	 = '$last_name	', 
        email	 = '$email	',
        password_	 = '$password_	',
        phone = '$phone',
        employee_ID = '$employee_ID',
        designation = '$designation',
        company = '$company'
        WHERE user_name='$user_name'";
        
                $res = mysqli_query($con, $query);
        
                if ($res) {
                    echo json_encode("true");
                } else {
                    echo json_encode("false");
                }
            } else {
                echo json_encode("false");
	}


?>