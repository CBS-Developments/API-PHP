<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$email = $_POST['email'];
$phone = $_POST['phone']; // Add this line to retrieve the phone number from the POST request

$query = "SELECT * FROM user WHERE email='$email' OR phone='$phone'"; // Change the query to search by email or phone
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
if ($data != null){
  $result = array(
    "status" => true,
    "user_name" => $data[1],
    "first_name" => $data[2],
    "last_name" => $data[3],
    "email" => $data[4],
    "password_" => $data[5],
    "phone" => $data[6],
    "user_role" => $data[7],
    "activate" => $data[8],
    "message" => "Success"
  );
  echo json_encode($result);  
} else {
  $result = array("status" => false, "message" => "User not found");
  echo json_encode($result);
}
?>
