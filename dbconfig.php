<?php
$username="dev9_connect";//change username 
$password="Ogtrlpn0o6"; //change password
$host="localhost";
$db_name="dev9_connect"; //change databasename


$con=mysqli_connect($host,$username,$password,$db_name);

if(!$con){
	// echo json_encode("Connection Failed");
}else{
	//echo json_encode("Connection Success");
}

?>