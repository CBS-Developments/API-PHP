<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id  = $_POST['task_id'];
$task_title  = $_POST['task_title'];
$task_type  = $_POST['task_type'];
$task_type_name  = $_POST['task_type_name'];
$task_description  = $_POST['task_description'];
$task_status  = $_POST['task_status'];
$task_status_name = $_POST['task_status_name'];
$action_taken_by_id = $_POST['action_taken_by_id'];
$action_taken_by = $_POST['action_taken_by'];
$action_taken_date = $_POST['action_taken_date'];
$action_taken_timestamp = $_POST['action_taken_timestamp'];
$task_edit_by = $_POST['task_edit_by'];
$task_edit_by_id = $_POST['task_edit_by_id'];
$task_edit_by_date = $_POST['task_edit_by_date'];
$task_edit_by_timestamp = $_POST['task_edit_by_timestamp'];

$query = "SELECT * FROM task WHERE task_id='$task_id'";  
 
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
if ($data[0] >= 1) {
        $query = "UPDATE task SET  

task_title = '$task_title',  
task_type = '$task_type',  
task_type_name = '$task_type_name',  
task_description = '$task_description',  
task_status = '$task_status',
task_status_name = '$task_status_name',
action_taken_by_id = '$action_taken_by_id',
action_taken_by = '$action_taken_by',
action_taken_date = '$action_taken_date',
action_taken_timestamp = '$action_taken_timestamp',
task_edit_by = '$task_edit_by',
task_edit_by_id = '$task_edit_by_id',
task_edit_by_date = '$task_edit_by_date',
task_edit_by_timestamp = '$task_edit_by_timestamp',

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
