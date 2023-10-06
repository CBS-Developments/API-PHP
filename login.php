<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$email = $_POST['email'];
$password_ = $_POST['password_']; // Add this line to retrieve the phone number from the POST request

$query = "SELECT * FROM user WHERE email='$email' AND password_='$password_'"; // Change the query to search by email or phone
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
    "employee_ID" => $data[7],
    "designation" => $data[8],
    "company" => $data[9],
    "user_role" => $data[10],
    "activate" => $data[11],
    "message" => "Success"
  );
  echo json_encode($result);  
} else {
  $result = array("status" => false, "message" => "User not found");
  echo json_encode($result);
}
?>
