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


$sql = "CREATE TABLE IF NOT EXISTS paid_bill ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    paid_bill_id INT(15) NOT NULL,
    bill_type_id INT(3) NOT NULL,
    bill_type_name VARCHAR(255) NOT NULL,
    month_ VARCHAR(50) NOT NULL,
    month_code VARCHAR(50) NOT NULL,
    year_ VARCHAR(50) NOT NULL,
    year_code VARCHAR(50) NOT NULL,
    paid_date VARCHAR(50) NOT NULL,
    paid_time_stamp INT(15) NOT NULL,
    amount DECIMAL(20,2) NOT NULL,
    payment_type VARCHAR(50) NOT NULL,
    pay_type INT(3) NOT NULL,
    bank VARCHAR(50) NOT NULL,
    bank_code VARCHAR(50) NOT NULL,
    cheque_or_trans_id VARCHAR(50) NOT NULL,
    remark VARCHAR(255) NOT NULL,
    paid_bill_create_by_id VARCHAR(50) NOT NULL,
    paid_bill_create_by VARCHAR(50) NOT NULL,
    paid_bill_create_date VARCHAR(50) NOT NULL,
    paid_bill_created_timestamp INT(15) NOT NULL,
    paid_bill_edit_by_id VARCHAR(50) NOT NULL,
    paid_bill_edit_by VARCHAR(50) NOT NULL,
    paid_bill_edit_date VARCHAR(50) NOT NULL,
    paid_bill_edit_timestamp INT(15) NOT NULL,
    paid_bill_delete_by_id VARCHAR(50) NOT NULL,
    paid_bill_delete_by VARCHAR(50) NOT NULL,
    paid_bill_delete_date VARCHAR(50) NOT NULL,
    paid_bill_delete_time_stamp INT(15) NOT NULL,
    paid_bill_delete_status INT(3) NOT NULL,
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)"; 
 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
