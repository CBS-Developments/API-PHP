<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id  = $_POST['task_id'];
$task_title  = $_POST['task_title'];
$task_type = $_POST['task_type'];
$task_type_name = $_POST['task_type_name'];
$due_date = $_POST['due_date'];
$task_edit_by = $_POST['task_edit_by'];
$task_edit_by_id = $_POST['task_edit_by_id'];
$task_edit_by_date = $_POST['task_edit_by_date'];
$task_edit_by_timestamp = $_POST['task_edit_by_timestamp'];
$source_from = $_POST['source_from'];
$assign_to = $_POST['assign_to'];
$company = $_POST['company'];
$document_number = $_POST['document_number'];

$query = "SELECT * FROM main_task WHERE task_id='$task_id'";  
 
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE main_task SET  
        task_title = '$task_title',
        task_type = '$task_type',
        task_type_name = '$task_type_name',
        due_date = '$due_date',
        task_edit_by = '$task_edit_by',
        task_edit_by_id = '$task_edit_by_id',
        task_edit_by_date = '$task_edit_by_date',
        task_edit_by_timestamp = '$task_edit_by_timestamp',
        source_from = '$source_from',
        assign_to = '$assign_to',
        company = '$company', 
        document_number = '$document_number' 
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
 

