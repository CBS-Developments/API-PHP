<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php");

$solts_id  = $_POST['solts_id'];
$availability  = $_POST['availability'];
$in_time = $_POST['in_time'];
$out_time = $_POST['out_time'];
$deference = $_POST['deference'];
$used_by = $_POST['used_by'];
$vehicle_number = $_POST['vehicle_number'];

$query = "SELECT * FROM parking_slots_sp WHERE solts_id='$solts_id'";  
 
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE parking_slots_sp SET  
        availability = '$availability',
        in_time = '$in_time',
        out_time = '$out_time',
        deference = '$deference',
        used_by = '$used_by',
        vehicle_number = '$vehicle_number'
        WHERE solts_id='$solts_id'";
        
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