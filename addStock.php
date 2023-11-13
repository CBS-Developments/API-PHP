<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php");

$item_code  = $_POST['item_code'];
$available_quantity  = $_POST['available_quantity'];


$query = "SELECT * FROM itemes WHERE item_code='$item_code'";  
 

$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE itemes SET  
        available_quantity = '$available_quantity'
        WHERE item_code='$item_code'";
        
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