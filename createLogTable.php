<?php
$username = "cbsworkspace_db"; //change username 
$password = "yesz46KNw2"; //change password
$host = "localhost";
$db_name = "cbsworkspace_db"; //change databasename

// Create connection
$con = mysqli_connect($host, $username, $password, $db_name);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS updated_log ( 
     id INT(32) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    log_id VARCHAR(50) NOT NULL,
    task_id VARCHAR(50) NOT NULL,
    task_name VARCHAR(1000) NOT NULL,
    log_summary VARCHAR(1000) NOT NULL,
    log_type VARCHAR(50) NOT NULL,
    log_details VARCHAR(2000) NOT NULL,
    log_create_by VARCHAR(50) NOT NULL,
    log_create_by_id VARCHAR(50) NOT NULL,
    log_create_by_date VARCHAR(50) NOT NULL,
    log_create_by_month VARCHAR(50) NOT NULL,
    log_create_by_year VARCHAR(50) NOT NULL,
    log_created_by_timestamp VARCHAR(100) NOT NULL
    )"; 
 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
