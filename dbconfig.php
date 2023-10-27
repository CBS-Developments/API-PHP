<?php
$username = "cbsworkspace_db"; //change username 
$password = "yesz46KNw2"; //change password
$host = "localhost";
$db_name = "cbsworkspace_db"; //change databasename


$con=mysqli_connect($host,$username,$password,$db_name);

if(!$con){
	// echo json_encode("Connection Failed");
}else{
	//echo json_encode("Connection Success");
}

?>