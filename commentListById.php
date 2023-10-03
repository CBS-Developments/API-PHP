<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_id= $_POST['task_id'];
$query = "SELECT * FROM comment WHERE task_id='$task_id' AND comment_status='1'";
//$query = "SELECT * FROM comment";

$res = mysqli_query($con,$query);
$rows = array();

while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode($rows);
mysqli_close($rows);

?>


