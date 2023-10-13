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


$sql = "CREATE TABLE IF NOT EXISTS sub_task ( 
    id INT(32) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    main_task_id VARCHAR(50) NOT NULL,
    task_id VARCHAR(50) NOT NULL,
    task_title VARCHAR(100) NOT NULL,
    task_type INT(10) NOT NULL,
    task_type_name VARCHAR(50) NOT NULL,
    due_date VARCHAR(50) NOT NULL,
    task_description VARCHAR(1000) NOT NULL,
    task_create_by_id VARCHAR(50) NOT NULL,
    task_create_by VARCHAR(100) NOT NULL,
    task_create_date VARCHAR(50) NOT NULL,
    task_create_month VARCHAR(50) NOT NULL,
    task_created_timestamp VARCHAR(100) NOT NULL,
    task_status VARCHAR(50) NOT NULL,
    task_status_name VARCHAR(50) NOT NULL,
    task_reopen_by VARCHAR(50) NOT NULL,
    task_reopen_by_id VARCHAR(50) NOT NULL,
    task_reopen_date VARCHAR(50) NOT NULL,
    task_reopen_timestamp VARCHAR(50) NOT NULL,
    task_finished_by VARCHAR(50) NOT NULL,
    task_finished_by_id VARCHAR(50) NOT NULL,
    task_finished_by_date VARCHAR(50) NOT NULL,
    task_finished_by_timestamp VARCHAR(50) NOT NULL,
    task_edit_by VARCHAR(50) NOT NULL,
    task_edit_by_id VARCHAR(50) NOT NULL,
    task_edit_by_date VARCHAR(50) NOT NULL,
    task_edit_by_timestamp VARCHAR(50) NOT NULL,
    task_delete_by VARCHAR(50) NOT NULL,
    task_delete_by_id VARCHAR(50) NOT NULL,
    task_delete_by_date VARCHAR(50) NOT NULL,
    task_delete_by_timestamp VARCHAR(50) NOT NULL,
    source_from VARCHAR(50) NOT NULL,
    assign_to VARCHAR(50) NOT NULL,
    company VARCHAR(50) NOT NULL,
    document_number VARCHAR(50) NOT NULL,
    watch_list VARCHAR(50) NOT NULL,
    action_taken_by_id VARCHAR(50) NOT NULL,
    action_taken_by VARCHAR(50) NOT NULL,
    action_taken_date VARCHAR(50) NOT NULL,
    action_taken_timestamp VARCHAR(50) NOT NULL,
    category_name VARCHAR(50) NOT NULL,
    category INT(11) NOT NULL)"; 
 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
