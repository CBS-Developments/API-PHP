 <?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");
 

$query = "SELECT * FROM main_task WHERE task_status LIKE '2'";

$res = mysqli_query($con,$query);
$rows = array();

while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode($rows);
mysqli_close($rows);

?>


