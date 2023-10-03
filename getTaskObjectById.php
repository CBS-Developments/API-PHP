<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id  = $_POST['task_id'];

$query = "SELECT * FROM task WHERE task_id='$task_id'";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
	if ($data != null){
	$result = array(
		"status"=>true, 
        "task_id"=>$data[1],
        "task_title"=>$data[2],
        "task_type"=>$data[3],
        "task_type_name"=>$data[4],
        "task_description"=>$data[5],
        "task_create_by_id"=>$data[6],
        "task_create_by"=>$data[7],
        "task_create_date"=>$data[8],
        "task_create_month"=>$data[9],
        "task_created_timestamp"=>$data[10],
        "task_status_name"=>$data[11],
        "action_taken_by_id"=>$data[12],
        "action_taken_by"=>$data[13],
        "action_taken_date"=>$data[14],
        "action_taken_timestamp"=>$data[15],
        "task_reopen_by"=>$data[16],
        "task_reopen_by_id"=>$data[17],
        "task_reopen_date"=>$data[18],
        "task_reopen_timestamp"=>$data[19],
        "task_finished_by"=>$data[20],
        "task_finished_by_id"=>$data[21],
        "task_finished_by_date"=>$data[22],
        "task_finished_by_timestamp"=>$data[23],
        "task_edit_by"=>$data[24],
        "task_edit_by_id"=>$data[25],
        "task_edit_by_date"=>$data[26],
        "task_edit_by_timestamp"=>$data[27],
        "task_delete_by"=>$data[28],
        "task_delete_by_id"=>$data[29],
        "task_delete_by_date"=>$data[30],
        "task_delete_by_timestamp"=>$data[31],
		"message"=>"Success");
	echo json_encode($result);  

	}else{
	$result = array("status"=>false,"message"=>"User not found");
	echo json_encode($result);
	}

?>

