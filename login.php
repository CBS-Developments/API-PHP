<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$phone = $_POST['phone'];

$query = "SELECT * FROM user WHERE phone='$phone'";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
if ($data != null){
$result = array(
"status"=>true,
"user_name"=>$data[1],
"first_name"=>$data[2],
"last_name"=>$data[3],
"phone"=>$data[4],
"user_role"=>$data[5],
"activate"=>$data[6],
"message"=>"Success");
echo json_encode($result);  
}else{
$result = array("status"=>false,"message"=>"User not found");
echo json_encode($result);
}
?>

