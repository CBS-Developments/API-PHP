 <?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$task_status= $_POST['task_status']; 
$main_task_id= $_POST['main_task_id'];

$query = "SELECT * FROM task WHERE main_task_id='$main_task_id' AND task_status='$task_status'";

$res = mysqli_query($con,$query);
$rows = array();

while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode($rows);
mysqli_close($rows);

?>


