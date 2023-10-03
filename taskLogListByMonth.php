<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");


$log_create_by_year = $_POST['log_create_by_year'];
$log_create_by_month = $_POST['log_create_by_month'];

$query = "SELECT * FROM task_log WHERE log_create_by_year ='$log_create_by_year' AND log_create_by_month ='$log_create_by_month'";

$res = mysqli_query($con,$query);
$rows = array();

while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode($rows);
mysqli_close($rows);
 
?>


