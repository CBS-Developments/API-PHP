 <?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php");
 
$user_name= $_POST['user_name'];

$query = "SELECT * FROM vehicles_sp WHERE user_name='$user_name' AND  active !='0' ";

$res = mysqli_query($con,$query);
$rows = array();

while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode($rows);
mysqli_close($rows);

?>//


