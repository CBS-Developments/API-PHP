<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php");
 

$query = "SELECT * FROM parking_slots_sp WHERE status_ LIKE '1'";

$res = mysqli_query($con,$query);
$rows = array();

while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode($rows);
mysqli_close($rows);

?>


