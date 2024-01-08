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


$sql = "CREATE TABLE IF NOT EXISTS parking_slots_sp( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    solts_id VARCHAR(255) NOT NULL,
    in_time VARCHAR(255) NOT NULL,
    out_time VARCHAR(255) NOT NULL,
    deference VARCHAR(255) NOT NULL,
    used_by VARCHAR(255) NOT NULL,
    vehicle_number VARCHAR(255) NOT NULL,
    used_date VARCHAR(100) NOT NULL)"; 
 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
