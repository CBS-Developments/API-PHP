<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfigB.php");

$email = $_POST['email'];
$password_ = $_POST['password_']; // Add this line to retrieve the phone number from the POST request

$query = "SELECT * FROM users_sp WHERE email='$email' AND password_='$password_'"; // Change the query to search by email or phone
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
if ($data != null){
  $result = array(
    "status" => true,
    "user_name" => $data[1],
    "first_name" => $data[2],
    "last_name" => $data[3],
    "email" => $data[4],
    "mobile" => $data[5],
    "password_" => $data[6],
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
