<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$log_id  = $_POST['log_id'];
$log_summary  = $_POST['log_summary'];
$task_id  = $_POST['task_id'];
$task_name  = $_POST['task_name'];
$log_type  = $_POST['log_type'];
$log_create_by = $_POST['log_create_by'];
$log_create_by_id = $_POST['log_create_by_id'];
$log_create_by_date = $_POST['log_create_by_date'];
$log_create_by_month = $_POST['log_create_by_month'];
$log_create_by_year = $_POST['log_create_by_year'];
$log_create_by_timestamp = $_POST['log_create_by_timestamp'];

$query = "SELECT * FROM task_log";  
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

$query = "INSERT INTO task_log(
log_id,
log_summary,
task_id,
task_name,
log_type,
log_create_by,
log_create_by_id,
log_create_by_date,
log_create_by_month,
log_create_by_year,
log_create_by_timestamp
) VALUES (
'$log_id',
'$log_summary',
'$task_id',
'$task_name',
'$log_type',
'$log_create_by',
'$log_create_by_id',
'$log_create_by_date',
'$log_create_by_month',
'$log_create_by_year',
'$log_create_by_timestamp'
)";

$res = mysqli_query($con,$query);   
   if ($res){
   echo json_encode("true");
   }else{
   echo json_encode("false");
   }
?>