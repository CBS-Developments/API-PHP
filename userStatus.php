<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$user_name  = $_POST['user_name'];
$active  = $_POST['active'];


$query = "SELECT * FROM user WHERE user_name='$user_name'";  
 

$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE user SET  
        active = '$active'
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