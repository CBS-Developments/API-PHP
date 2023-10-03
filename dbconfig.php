<?php
$username = "cbswkspcdev_db"; //change username 
$password = "uvmnm3myVD"; //change password
$host = "localhost";
$db_name = "cbswkspcdev_db"; //change databasename


$con=mysqli_connect($host,$username,$password,$db_name);

if(!$con){
	// echo json_encode("Connection Failed");
}else{
	//echo json_encode("Connection Success");
}

?>