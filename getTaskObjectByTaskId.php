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
        "main_task_id"=>$data[1],
        "task_id"=>$data[2],
        "task_title"=>$data[3],
        "task_type"=>$data[4],
        "due_date"=>$data[5],
        "task_type_name"=>$data[6],
        "task_description"=>$data[7],
        "task_create_by_id"=>$data[8],
        "task_create_by"=>$data[9],
        "task_create_date"=>$data[10],
        "task_create_month"=>$data[11],
        "task_created_timestamp"=>$data[12],
        "task_status"=>$data[13],
        "task_status_name"=>$data[14],
        "action_taken_by_id"=>$data[15],
        "action_taken_by"=>$data[16],
        "action_taken_date"=>$data[17],
        "action_taken_timestamp"=>$data[18],
        "task_reopen_by"=>$data[19],
        "task_reopen_by_id"=>$data[20],
        "task_reopen_date"=>$data[21],
        "task_reopen_timestamp"=>$data[22],
        "task_finished_by"=>$data[23],
        "task_finished_by_id"=>$data[24],
        "task_finished_by_date"=>$data[25],
        "task_finished_by_timestamp"=>$data[26],
        "task_edit_by"=>$data[27],
        "task_edit_by_id"=>$data[28],
        "task_edit_by_date"=>$data[29],
        "task_edit_by_timestamp"=>$data[30],
        "task_delete_by"=>$data[31],
        "task_delete_by_id"=>$data[32],
        "task_delete_by_date"=>$data[33],
        "task_delete_by_timestamp"=>$data[34],
        "source_from"=>$data[35],
        "assign_to"=>$data[36],
        "company"=>$data[37],
        "document_number"=>$data[38],
		"message"=>"Success");
	echo json_encode($result);  

	}else{
	$result = array("status"=>false,"message"=>"User not found");
	echo json_encode($result);
	}

?>

