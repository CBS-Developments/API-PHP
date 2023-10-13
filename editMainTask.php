<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id  = $_POST['task_id'];
$task_title  = $_POST['task_title'];
$task_type_name  = $_POST['task_type_name'];
$task_description  = $_POST['task_description'];
$task_status_name = $_POST['task_status_name'];
$action_taken_by_id = $_POST['action_taken_by_id'];
$action_taken_by = $_POST['action_taken_by'];
$action_taken_date = $_POST['action_taken_date'];
$action_taken_timestamp = $_POST['action_taken_timestamp'];
$task_edit_by = $_POST['task_edit_by'];
$task_edit_by_id = $_POST['task_edit_by_id'];
$task_edit_by_date = $_POST['task_edit_by_date'];
$task_edit_by_timestamp = $_POST['task_edit_by_timestamp'];
$company  = $_POST['company'];
$due_date  = $_POST['due_date'];
$assign_to  = $_POST['assign_to'];
$source_from  = $_POST['source_from'];
$category_name  = $_POST['category_name'];
$category  = $_POST['category'];

$query = "SELECT * FROM main_task WHERE task_id='$task_id'";  
 
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
if ($data[0] >= 1) {
        $query = "UPDATE main_task SET  

task_title = '$task_title',  
task_type_name = '$task_type_name',  
task_description = '$task_description',  
task_status_name = '$task_status_name',
action_taken_by_id = '$action_taken_by_id',
action_taken_by = '$action_taken_by',
action_taken_date = '$action_taken_date',
action_taken_timestamp = '$action_taken_timestamp',
task_edit_by = '$task_edit_by',
task_edit_by_id = '$task_edit_by_id',
task_edit_by_date = '$task_edit_by_date',
task_edit_by_timestamp = '$task_edit_by_timestamp',
company = '$company',
due_date = '$due_date',
assign_to = '$assign_to',
source_from = '$source_from',
category_name = '$category_name',
category = '$category',

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
