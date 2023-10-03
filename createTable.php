<?php
$username = "cbswkspcdev_db"; //change username 
$password = "uvmnm3myVD"; //change password
$host = "localhost";
$db_name = "cbswkspcdev_db"; //change databasename

// Create connection
$con = mysqli_connect($host, $username, $password, $db_name);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS user ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password_ VARCHAR(100) NOT NULL,
    phone INT(10) NOT NULL,
    user_role INT(11) NOT NULL,
    activate INT(11) NOT NULL)"; 
 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
