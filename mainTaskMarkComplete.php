<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id  = $_POST['task_id'];
$task_status  = $_POST['task_status'];
$task_status_name = $_POST['task_status_name'];
$action_taken_by_id = $_POST['action_taken_by_id'];
$action_taken_by = $_POST['action_taken_by'];
$action_taken_date = $_POST['action_taken_date'];
$action_taken_timestamp = $_POST['action_taken_timestamp'];

$query = "SELECT * FROM main_task WHERE task_id='$task_id'";  
 

$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE main_task SET  
        task_status = '$task_status',
        task_status_name = '$task_status_name',
 	task_finished_by = '$action_taken_by',
        task_finished_by_id = '$action_taken_by_id',
        task_finished_by_date = '$action_taken_date',
        task_finished_by_timestamp = '$action_taken_timestamp'
        WHERE task_id='$task_id'";
        
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