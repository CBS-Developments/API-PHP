<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id  = $_POST['task_id'];

$query = "SELECT * FROM main_task WHERE task_id='$task_id'";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
	if ($data != null){
	$result = array(
		"status"=>true, 
        "task_title"=>$data[2],
		"message"=>"Success");
	echo json_encode($result);  

	}else{
	$result = array("status"=>false,"message"=>"Task not found");
	echo json_encode($result);
	}

?>

