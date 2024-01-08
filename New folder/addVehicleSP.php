<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php"); 

    $user_name= $_POST['user_name'];
    $vehicle_number= $_POST['vehicle_number'];
    $id_number= $_POST['id_number'];
    $vehicle_type= $_POST['vehicle_type'];
    $vehicle_modle= $_POST['vehicle_modle'];
    $active= $_POST['active'];
    



$query = "SELECT * FROM vehicles_sp";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create task
 $query = "INSERT INTO vehicles_sp(
user_name,
vehicle_number,
id_number,
vehicle_type,
vehicle_modle,
active

 ) VALUES (
'$user_name',
'$vehicle_number',
'$id_number',
'$vehicle_type',
'$vehicle_modle',
'$active'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>